<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class ClientController extends Controller
{
    /**
     * @Route("/menu")
     */
    public function DisplayAcceuilAction(Request $request)
    {

        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM RestoBundle:Restaurant a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );


        return $this->render('RestoBundle:ClientGUI:Accueil.html.twig',array("resto"=>$pagination));
    }
    public function DealsAction(Request $request)
    {


        $em    = $this->get('doctrine.orm.entity_manager');
        $dql   = "SELECT a FROM RestoBundle:Restaurant a";
        $query = $em->createQuery($dql);

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            9/*limit per page*/
        );


        return $this->render('RestoBundle:ClientGUI:Accueil.html.twig',array("resto"=>$pagination));
    }

}
