<?php

namespace GSEB\ValidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Driver\Connection;

class ValidationController extends Controller
{
    public function accueilAction()
    {
        return $this->render('@GSEBValidation/Validation/accueil.html.twig');            
    }
    public function listAction()
    {
        $repository = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBPlatformBundle:Demande')
        ;

        $listDemandes = $repository->findAll();

        return $this->render('@GSEBValidation/Validation/listDemandes.html.twig', array('listDemandes' => $listDemandes));            
    }
    public function viewAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBPlatformBundle:Demande')
        ;
        
        $demande = $repository->find($id);
  
      return $this->render('@GSEBValidation/Validation/view.html.twig', array(
        'demande' => $demande
      ));
    }
}
