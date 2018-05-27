<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ReviewController extends Controller
{
    /**
     * @Route("/review")
     */
    public function DisplayReviewAction()
    {
        return $this->render('RestoBundle:Review:resto_review.html.twig', array(
            // ...
        ));
    }

}
