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
       
        $formDemande = $this->get('form.factory')->create(DemandeType::class, $demande,[
            'action' => $session->get('Action'),
            'idObjType' => $id_objtype,
            'idBaie'    => $session->get('Baie')
        ]);
       
        if ($request->isMethod('POST')) {
            // On fait le lien Requête <-> Formulaire
            // À partir de maintenant, la variable $advert contient les valeurs entrées dans le formulaire par le visiteur
            $formDemande->handleRequest($request);
      
            // On vérifie que les valeurs entrées sont correctes
            // (Nous verrons la validation des objets en détail dans le prochain chapitre)
            if ($formDemande->isValid()) {
                // On enregistre notre objet $advert dans la base de données, par exemple
                $em = $this->getDoctrine()->getManager('demande');
                //$contact->setDemande($demande);
                //$em->persist($demande);              
                $em->persist($demande);
                $em->flush();
                $request->getSession()->getFlashBag()->add('notice', 'Demande bien enregistrée.');
              
                    // On redirige vers la page de visualisation de l'annonce nouvellement créée
                    return $this->redirectToRoute('gseb_platform_homepage');
            }
        }
        /*---------------------------------------/
        /            Connexion BDD               /
        /      Récupération de la session        /
        /---------------------------------------*/        
        $conn = $this->get('database_connection');
        /*---------------------------------------/
        /        Partie Requête BDD              /
        /---------------------------------------*/ 
        $caracobject = $conn->fetchAll
        (
            'SELECT a.id, a.name, a.type, am.chapter_id '.
            'FROM Attribute a '.
            'JOIN AttributeMap am '.
            'ON a.id=am.attr_id '.
            'WHERE am.objtype_id='.$id_objtype.' '
        );      

        
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
