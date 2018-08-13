<?php

namespace GSEB\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ActionController extends Controller
{
    /**
     * Fonction principale du controller permettant 
     * de lancer la page correspondante à l'action  
     */

    public function indexAction($action,Request $request)
    {
        $session= $request->getSession();                
        if ($action == "add")
        {
            $session->set('Action',$action);
            return $this->render('@GSEBPlatform/Action/add.html.twig');            
        }
        if ($action == "edit")
        {
            $session->set('Action',$action);
            return $this->render('@GSEBPlatform/Action/edit.html.twig');            
        }
        if ($action == "delete")
        {
            $session->set('Action',$action);            
            return $this->render('@GSEBPlatform/Action/delete.html.twig');
        }
    }  
    public function accueilAction()
    {
        return $this->render('@GSEBPlatform/Action/accueil.html.twig');  
    }  
}
