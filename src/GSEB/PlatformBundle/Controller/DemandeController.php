<?php

namespace GSEB\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;

//--Nécessaire au formulaire
use GSEB\PlatformBundle\Entity\Demande;
use GSEB\PlatformBundle\Entity\Contact;
use GSEB\PlatformBundle\Entity\Attribut;
use GSEB\PlatformBundle\Entity\Object;
use GSEB\PlatformBundle\Entity\Rackspace;

use GSEB\PlatformBundle\Form\DemandeType;
use Symfony\Component\Form\Extension\Core\Type\FormType;

class DemandeController extends Controller
{
    public function listSalleAction()
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /---------------------------------------*/
        $conn = $this->get('database_connection');

        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/
        $salles = $conn->fetchAll
        (
            'SELECT * '.
            'from Row'
        );
        $demande = new Demande();
        $object = new Object();
        $contact = new Contact();
        $attr1 = new Attribut();
        $attr2 = new Attribut();
        $rackspace = new Rackspace();
        
        //--------Object---------
        $object->setObjtypeId(56);
        $object->setName("Switch 203NX");

        //--------Demande---------
        $demande->setAction(1);
        $demande->setSujet("Installation d'un switch baie 104");
        $demande->setComment("No comment for this object");
        
        //--------Contact---------
        $contact->setNom("Durand");
        $contact->setPrenom("Jean-Yves");
        $contact->setMail("jy.dur@mail.com");
        $contact->setTelephone("0658589623");
        $contact->setSociete("Nutanix");
        $contact->setFonction("ArchiRes");
        
        //--------Attribut 1---------
        $attr1->setAttrId(42);
        $attr1->setValue("Cisco ver. XXXX");
        //--------Attribut 2---------
        $attr2->setAttrId(16);
        $attr2->setValue("1000 kW/h");
        
        //--------RackSpace---------
        $rackspace->setRackId(16);
        $rackspace->setUnitNo(12);
        $rackspace->setAtom(1);
        
        //--------Liaisons---------
        $rackspace->setObject($object);
        $attr1->setObject($object);
        $attr2->setObject($object);
        $demande->setObject($object);        
        $demande->setContact($contact);

        $em = $this->getDoctrine()->getManager('demande');
        $em->persist($object);        
        $em->persist($demande);

        $em->flush();

        return $this->render('@GSEBPlatform/Demande/listSalle.html.twig',array('resultat' => $salles));
    }
    public function listBaieAction($id_salle, Request $request)
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/             
        $conn = $this->get('database_connection');
        $session= $request->getSession();   

        $session->set('Salle',$id_salle);
        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/
        $baies = $conn->fetchAll
        (
            'SELECT * '.
            'FROM Rack '.
            'WHERE row_id='.$id_salle.''
        );

        return $this->render('@GSEBPlatform/Demande/listBaie.html.twig',array('resultat' => $baies));
    }
    public function listObjectAction($id_baie,Request $request)
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/
        $conn = $this->get('database_connection');
        $session= $request->getSession();        
        $session->set('Baie',$id_baie);
        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/
        $object_type = $conn->fetchAll
        (
            'SELECT * '.
            'FROM Dictionary '.
            'WHERE chapter_id=1'
        );
        return $this->render('@GSEBPlatform/Demande/listObject.html.twig',array('resultat' => $object_type));
    }

    public function listPropertiesAction($id_objtype,Request $request)
    {
        $session= $request->getSession();           
        $demande = new Demande();
        //$id_objtype = 7;
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/        
        $conn = $this->get('database_connection');
        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/ 
        if ($id_objtype != 'add' and $id_objtype != 'edit' and $id_objtype != 'delete')
        {
            $caracobject = $conn->fetchAll
            (
                'SELECT a.id, a.name, a.type, am.chapter_id '.
                'FROM Attribute a '.
                'JOIN AttributeMap am '.
                'ON a.id=am.attr_id '.
                'WHERE am.objtype_id='.$id_objtype.' '
            );
        }
        $caracobject = 0;
        /*---------------------------------------/
        /          Partie Formulaire             /
        /---------------------------------------*/        
        $formDemande = $this->get('form.factory')->create(DemandeType::class, $demande,[
            'action' => $session->get('Action'),
            'idObjType' => $id_objtype,
            'idBaie'    => $session->get('Baie'),
            'attributs' => $caracobject,

        ]);
        /*---------------------------------------/
        /        Validation du formulaire        /
        /---------------------------------------*/   
        if ($request->isMethod('POST')) {
            echo "BONJOUR JE SUIS UNE REQUETE POST";
            return $this->redirectToRoute('gseb_platform_homepage');
            
            $formDemande->handleRequest($request);
            if ($formDemande->isValid()) {
                $em = $this->getDoctrine()->getManager('demande');
                $em->persist($demande);
                $em->flush();
                //$request->getSession()->getFlashBag()->add('notice', 'Demande bien enregistrée.');
                return $this->redirectToRoute('gseb_platform_homepage');
            }        
        }
        return $this->render('@GSEBPlatform/Demande/formTest.html.twig',array(
            'form' => $formDemande->createView(),
        ));
    }
    
    public function demandeRecapAction(Request $request)
    {
        /*---------------------------------------/
        /      Récupération de la session        /
        /---------------------------------------*/
        $session= $request->getSession();        
        $form = array(
            'salle'   =>    $session->get('Salle'),
            'baie'    =>    $session->get('Baie'),
            'action'  =>    $session->get('Action'),
        );
    
        return $this->render('@GSEBPlatform/Demande/demandeRecap.html.twig',array('res'=>$form));
    }
    public function demandeSuccessAction($id_demande)
    {
        //$em_demande = $this->getEntityManager('demande');

        return $this->render('@GSEBPlatform/Demande/demandeSuccess.html.twig',array('demande'=>$id_demande));
    }
}
