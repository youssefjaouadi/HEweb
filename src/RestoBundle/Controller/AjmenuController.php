<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AjmenuController extends Controller
{
    /**
     * @Route("/menu")
     */
    public function DisplayMenuAction()
    {
        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig', array(
            // ...
        ));
    }

}
