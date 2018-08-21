<?php

namespace GSEB\PlatformBundle\Controller;

require_once("/var/www/html/FormdGseb/src/GSEB/PlatformBundle/Racktables/QueryRacktables.php");
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\EntityManagerInterface;
use GSEB\PlatformBundle\Racktables\QueryRacktables;

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
        // /*---------------------------------------/
        // /            Connexion BDD               /
        // /---------------------------------------*/
        $conn = $this->get('database_connection');
        
        $salles = querySalle($conn);

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
        $baies = queryBaie($conn, $id_salle);

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
        $object_type = queryListObjType ($conn);
        return $this->render('@GSEBPlatform/Demande/listObject.html.twig',array('resultat' => $object_type));
    }

    public function listPropertiesAction($id_objtype,Request $request)
    {
        $session= $request->getSession();           
        $demande = new Demande();   
        /*---------------------------------------/
        /          Partie Formulaire             /
        /---------------------------------------*/        
        $formDemande = $this
            ->get('form.factory')
            ->create(DemandeType::class, $demande,[
                'action' => $session->get('Action'),
                'idObjType' => $id_objtype,
            ]);
        /*---------------------------------------/
        /        Validation du formulaire        /
        /---------------------------------------*/   
        if ($request->isMethod('POST')) {
            $formDemande->handleRequest($request);
            if ($formDemande->isValid()) {
                $em = $this->getDoctrine()->getManager('demande');
                $em->persist($demande);
                $em->flush();
                //$request->getSession()->getFlashBag()->add('notice', 'Demande bien enregistrée.');
                return $this->redirectToRoute('gseb_platform_demande_attributs',array('id_demande' => $demande->getId()));
            }        
        }
        return $this->render('@GSEBPlatform/Demande/formTest.html.twig',array(
            'form' => $formDemande->createView(),
        ));
    }
    public function listAttributsAction ($id_demande,Request $request)
    {
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/        
        $conn = $this->get('database_connection');
        $repo = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBPlatformBundle:Demande')
        ;
        $demande = $repo->find($id_demande);
        $id_objtype = $demande->getObject()->getObjtypeId();
        $object = $demande->getObject();

        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/ 
        $caracobject = queryAttrObj($conn, $id_objtype);
        $nbcaract = count($caracobject);

        /*---------------------------------------/
        /        Validation du formulaire        /
        /---------------------------------------*/  
        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager('demande');
            
            for ($i=1;$i<$nbcaract;$i++)
            {
                $attribut = new Attribut();
                $value = $request->request->get($caracobject[$i]['id'],'none');    
                $attribut->setValue($value);
                $attribut->setAttrId($caracobject[$i]['id']);
                $attribut->setObject($object);
                $em->persist($attribut);
                $em->flush();             
            }
            return $this->redirectToRoute('gseb_platform_demande_rackspace',array('id_demande' => $demande->getId()));
        }
        return $this->render('@GSEBPlatform/Demande/listAttributs.html.twig',array(
            'resultat'=>$caracobject,
            'demande' =>$demande
        ));        
    }

    public function rackspaceAction($id_demande, Request $request)
    {
        $session= $request->getSession();   
        $id_baie = $session->get('Baie');

        $conn = $this->get('database_connection');
        $repo = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBPlatformBundle:Demande')
        ;
        $demande = $repo->find($id_demande);        
        $object = $demande->getObject();

        $height = queryRackHeight($conn, $id_baie);
        
        $rackspace = queryRackspaceAlloc($conn, $id_baie);

        if ($request->isMethod('POST')) {
            $em = $this->getDoctrine()->getManager('demande');
            //rajouter les isset $_POST
            if (isset($_POST['interior']))
            {
                foreach( $_POST['interior'] as $value )
                {
                    $rackspace = new Rackspace();
                    $rackspace->setUnitNo($value);
                    $rackspace->setAtom(1);
                    $rackspace->setRackId($id_baie);
                    $rackspace->setObject($object);                
                    $em->persist($rackspace);
                    $em->flush();         
                }
            }
            if (isset($_POST['front']))
            {
                foreach( $_POST['front'] as $value )
                {
                    $rackspace = new Rackspace();
                    $rackspace->setUnitNo($value);
                    $rackspace->setAtom(2);
                    $rackspace->setRackId($id_baie);
                    $rackspace->setObject($object);                
                    $em->persist($rackspace);
                    $em->flush();                  
                }
            }
            if (isset($_POST['rear']))
            {
                foreach( $_POST['rear'] as $value )
                {
                    $rackspace = new Rackspace();
                    $rackspace->setUnitNo($value);
                    $rackspace->setAtom(3);
                    $rackspace->setRackId($id_baie);
                    $rackspace->setObject($object);                
                    $em->persist($rackspace);
                    $em->flush();         
                }
            }
            return $this->redirectToRoute('gseb_platform_demande_success',array('id_demande' => $demande->getId()));     
        }
        return $this->render('@GSEBPlatform/Demande/rackspace.html.twig',array(
            'demande' =>$demande,
            'id_rack' =>$id_baie,
            'height' => $height,
            'rackspace' => $rackspace,
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
