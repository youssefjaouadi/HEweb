<?php

namespace RestoBundle\Controller;

use RestoBundle\Entity\Resto;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class InsRController extends Controller
{
    /**
     * @Route("/signupr")
     */
    public function DisplayInsRAction()
    {        $r=$this->getDoctrine()->getRepository("RestoBundle:Resto")->findAll();

        return $this->render('RestoBundle:InsR:insr.html.twig', array(/*"restos"=>$r*/
            // ...
        ));
    }
    /**
     * @Route("/insr")
     */
    public function InsRAction(Request $req)
    {
        $req->isXmlHttpRequest();
        $r=new Resto($req->get("idplacerval"),$req->get("nomrval"),$req->get("adrrval"),"bb",$req->get("ouvrval"),$req->get("fermrval"),$req->get("typerval"),"bb","bb"
            ,"bb",$req->get("langrval"),$req->get("latrval"));
        $this->getDoctrine()->getManager()->persist($r);
        $this->getDoctrine()->getManager()->flush();

        $r=$this->getDoctrine()->getRepository("RestoBundle:Resto")->findAll();


        return $this->redirectToRoute("resto_dashboardcontroller_restohome");
    }
    /**
     * @Route("/updr")
     */
    public function updateAction()
    {

        $r=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find(1);
        $r->setDescription("test1");
        $this->getDoctrine()->getManager()->flush();

        return $this->render('RestoBundle:InsR:insr.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delr")
     */
    public function deleteAction()
    {

        $r=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find(1);
        $this->getDoctrine()->getManager()->remove($r);
        $this->getDoctrine()->getManager()->flush();

        return $this->render('RestoBundle:InsR:insr.html.twig', array(
            // ...
        ));
    }

}
