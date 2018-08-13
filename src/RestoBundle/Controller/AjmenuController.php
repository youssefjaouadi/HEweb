<?php

namespace RestoBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use RestoBundle\ArrayList;
use RestoBundle\Entity\Categorie;
use RestoBundle\Entity\Plat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class AjmenuController extends Controller
{
    /**
     * AjmenuController constructor.
     */
    public function __construct()
    {

    }

    /**
     * @Route("/menu")
     */
    public function DisplayMenuAction()
    {
        $list = array();

        $listplats=new ArrayList();
        $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
        $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);



        $cats=$this->getDoctrine()->getRepository("RestoBundle:Categorie")->findAll();
        foreach ($cats as $cat) {
            if($cat->getIdresto()==$resto) {
                $plats = $this->getDoctrine()->getRepository("RestoBundle:Plat")->findByid_cat($cat);
                if ($plats != null) {
                    array_push($list, $plats);
                }
            }

        }
        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig', array("plats"=>$list
            // ...
        ));
    }

    public function remouvemenuAction(Request $request)
    {

        if($request->isXmlHttpRequest()) {

            $pl=$this->getDoctrine()->getRepository("RestoBundle:Plat")->find($request->request->get('id'));

            $this->getDoctrine()->getManager()->remove($pl);
            $this->getDoctrine()->getManager()->flush();
            $arrData = ['output' => "koko = "];
            return new JsonResponse($arrData);
        }
        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig');

    }

    public function updatemenuAction(Request $request)
    {

        if($request->isXmlHttpRequest()) {

            $pl=$this->getDoctrine()->getRepository("RestoBundle:Plat")->find($request->request->get('id'));
$pl->setNomPlat($request->request->get('nom'));
$pl->setPrixPlat($request->request->get('prix'));
            $this->getDoctrine()->getManager()->flush();
            $arrData = ['output' => "koko = "];
            return new JsonResponse($arrData);
        }
        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig');

    }


    public function addmenuAction(Request $request)
    {

        $menus = new ArrayList();
        if($request->isXmlHttpRequest()) {




                  $iduser = $this->container->get('security.token_storage')->getToken()->getUser()->getId();



if($request->request->get('etat')=="1") {
    $c=new Categorie();
    $resto=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($iduser);
    $c->setNomCat($request->request->get('nom_cat'));
    $c->setIdresto($resto);
    $this->getDoctrine()->getManager()->persist($c);
    $this->getDoctrine()->getManager()->flush();

    /*$nbr=$this->getDoctrine()->getRepository("RestoBundle:Categorie")->findAll();
    foreach ($nbr as $l2){
        $i=$l2->getIdCat();
    }*/
    //$cat=$this->getDoctrine()->getRepository("RestoBundle:Categorie")->find($i);

    foreach ($request->request->get('nom_plat')as $l)
    {
        $plat1 = new Plat();
        $plat1->setNomPlat($l);
        $plat1->setDescriptionPlat("mmmmmmmm");
        $plat1->setPrixPlat("200");
        $plat1->setIdCat($c);

        $this->getDoctrine()->getManager()->persist($plat1);
        $this->getDoctrine()->getManager()->flush();
    }
    return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig', array(
        // ...
    ));


}
    $arrData = ['output' => $menus];
    return new JsonResponse($arrData);

        }


        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig', array(
            // ...
        ));

    }

    public function addsinglemenuAction(Request $request)
    {

        if($request->isXmlHttpRequest()) {
            $plat1 = new Plat();
            $cat=$this->getDoctrine()->getRepository("RestoBundle:Categorie")->find($request->request->get('id'));
            $plat1->setNomPlat($request->request->get('nom'));
            $plat1->setIdCat($cat);
            $plat1->setDescriptionPlat("mmmmmmmm");
            $plat1->setPrixPlat($request->request->get('prix'));
            $plat1->setFile($request->files->get("image"));

$plat1->uploadProfilPicture();
            $this->getDoctrine()->getManager()->persist($plat1);
            $this->getDoctrine()->getManager()->flush();
            $s=$plat1->getIdPlat();


            $arrData = ['output' => "koko = ".$s];
            return new JsonResponse($arrData);
        }
        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig');

        }

}
