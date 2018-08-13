<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LoginRController extends Controller
{
    /**
     * @Route("/loginr")
     */
    public function LoginRAction()
    {
        return $this->render('RestoBundle:LoginR:login_r.html.twig', array(
            // ...
        ));
    }
    /**
     * @Route("/lostmdp")
     */
    public function LostmdpAction()
    {
        return $this->render('RestoBundle:LoginR:lostmdp.html.twig', array(
            // ...
        ));
    }

}
