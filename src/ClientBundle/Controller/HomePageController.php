<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomePageController extends Controller
{
    /**
     * @Route("/home")
     */
    public function DisplayHomeAction()
    {
        return $this->render('ClientBundle:HomePage:homepage.html.twig', array(
            // ...
        ));
    }

}
