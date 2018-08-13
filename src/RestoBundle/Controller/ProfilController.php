<?php

namespace RestoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ProfilController extends Controller
{

    public function DisplayProfileAction()
    {        $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);
        return $this->render('RestoBundle:Profil:profile.html.twig', array("user"=>$resto
            // ...
        ));
    }
    public function UpdateInformGeneraleProfileAction(Request $req)
    {
        if($req->isXmlHttpRequest()) {

            $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
            $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);
$resto->setOuverture($req->request->get('ouvr'));
$resto->setFermeture($req->request->get('fermr'));
$resto->setTel($req->request->get('telr'));
            $this->getDoctrine()->getManager()->flush();
            $arrData = ['output' => "koko = ".$resto->getOuverture()];
            return new JsonResponse($arrData);
        }


        $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);

        return $this->render('RestoBundle:Profil:profile.html.twig', array("user"=>$resto
            // ...
        ));
    }
    public function UpdateConfidProfileAction(Request $req)
    {
        if($req->isXmlHttpRequest()) {

            $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
            $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);
            $resto->setPassword($req->request->get('mdp'));
            $resto->setRibresto($req->request->get('rib'));
            $this->getDoctrine()->getManager()->flush();
            $arrData = ['output' => "koko = ".$resto->getOuverture()];
            return new JsonResponse($arrData);
        }


        $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);

        return $this->render('RestoBundle:Profil:profile.html.twig', array("user"=>$resto
            // ...
        ));
    }
}
