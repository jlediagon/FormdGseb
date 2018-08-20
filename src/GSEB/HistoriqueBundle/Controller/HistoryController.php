<?php

namespace GSEB\HistoriqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\DBAL\Driver\Connection;

class HistoryController extends Controller
{
    public function indexAction()
    {
          
        $repository = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBPlatformBundle:Demande')
        ;

        $listDemandes = $repository->findAll();

        return $this->render('@GSEBHistorique/History/index.html.twig', array('listDemandes' => $listDemandes));
    }

    public function viewAction($id)
    {
        $repository = $this
            ->getDoctrine()
            ->getManager('demande')
            ->getRepository('GSEBPlatformBundle:Demande')
        ;
        
        $demande = $repository->find($id);
  
      return $this->render('@GSEBHistorique/History/view.html.twig', array(
        'demande' => $demande
      ));
    }
}
