<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DashboardControllerController extends Controller
{
    /**
     * @Route("/RestoHome")
     */
    public function RestoHomeAction()
    {
        return $this->render('RestoBundle:DashboardController:resto_home.html.twig', array(
            // ...
        ));
    }

}
