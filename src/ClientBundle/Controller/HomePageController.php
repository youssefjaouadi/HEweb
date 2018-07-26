<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityRepository;

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
    /**
     * @Route("/listr")
     */
    public function GetNearRestoAction(Request $request)
    {
            $lat=$request->request->get("ltd");
            $long=$request->request->get("lng");
            $rad=$request->request->get("rad");
            $qr=$this->getDoctrine()->getRepository("RestoBundle:Resto")->Getloc($lat,$long,$rad);
            return $this->render('@Client/HomePage/listresto.html.twig',array('data'=>$qr));
    }


}
