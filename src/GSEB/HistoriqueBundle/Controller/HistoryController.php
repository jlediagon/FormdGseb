<?php

namespace GSEB\HistoriqueBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HistoryController extends Controller
{
    public function indexAction()
    {
        /*
         * Etat :
         *  - 1 : Validé
         *  - 2 : En cours 
         *  - 3 : Refusé
         */
        $listDemandes = array(
            array(
                'title'   => "Ajout d'un switch Cisco dans la baie 104",
                'id'      => 56,
                'technicien'  => 'Jean-Michel Bourvier',
                'salle' => 'PA3', 
                'etat' => 1,          
                'date'    => new \Datetime()),
            array(
                'title'   => "Suppression d'un serveur dans la baie 204",
                'id'      => 57,
                'technicien'  => 'Jean-François Copé',
                'salle' => 'PA3',  
                'etat' => 1,                          
                'date'    => new \Datetime()),
            array(
                'title'   => "Modification d'un emplacement de P8 baie 102",
                'id'      => 59,
                'technicien'  => 'Marc Benoit',
                'salle' => 'PA3',  
                'etat' => 2,                          
                'date'    => new \Datetime())
          );
        return $this->render('@GSEBHistorique/History/index.html.twig', array('listDemandes' => $listDemandes));
    }

    public function viewAction($id)
    {
         // Ici, on récupérera l'annonce correspondante à l'id $id

        $demande = array(
            'title'   => "Ajout d'un switch Cisco dans la baie 104",
            'id'      => 56,
            'technicien'  => 'Jean-Michel Bourvier',
            'salle' => 'PA3',  
            'content' => "Demande effectué afin d'ajouter un switch dans la baie 104",      
            'date'    => new \Datetime())
      ;
  
      return $this->render('@GSEBHistorique/History/view.html.twig', array(
        'demande' => $demande
      ));
    }
}
