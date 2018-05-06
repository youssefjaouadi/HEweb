<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProfilController extends Controller
{
    /**
     * @Route("/profile")
     */
    public function DisplayProfileAction()
    {
        return $this->render('RestoBundle:Profil:profile.html.twig', array(
            // ...
        ));
    }

}
