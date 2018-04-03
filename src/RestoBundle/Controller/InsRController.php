<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class InsRController extends Controller
{
    /**
     * @Route("/signupr")
     */
    public function DisplayInsRAction()
    {
        return $this->render('RestoBundle:InsR:insr.html.twig', array(
            // ...
        ));
    }

}
