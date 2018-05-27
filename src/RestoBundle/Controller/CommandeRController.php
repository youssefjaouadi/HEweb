<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class CommandeRController extends Controller
{
    /**
     * @Route("/commande")
     */
    public function DisplayCmdAction()
    {
        return $this->render('RestoBundle:CommandeR:commandeR.html.twig', array(
            // ...
        ));
    }

}
