<?php

namespace RestoBundle\Controller;

use Doctrine\Common\Collections\ArrayCollection;
use RestoBundle\ArrayList;
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
        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig', array(
            // ...
        ));
    }
    public function addmenuAction(Request $request)
    {

        $menus = new ArrayList();
        if($request->isXmlHttpRequest()) {



            $cat=$this->getDoctrine()->getRepository("RestoBundle:Categorie")->find("1");


foreach ($request->request->get('nom_plat')as $l)
{
    $plat1 = new Plat();
    $plat1->setNomPlat($l);
    $plat1->setIdCat($cat);
    $plat1->setDescriptionPlat("mmmmmmmm");
    $plat1->setPrixPlat("200");
    $menus->add($plat1);
}

if($request->request->get('etat')=="1") {
    for ($i = 0; $i < $request->request->get('nom_plat'); $i++) {
        $this->getDoctrine()->getManager()->persist($menus->GetObj($i));
        $this->getDoctrine()->getManager()->flush();
    }
    return $this->render("Number","10");


}
    $arrData = ['output' => $menus];
    return new JsonResponse($arrData);

        }


        return $this->render('RestoBundle:Ajmenu:resto-menu.html.twig', array(
            // ...
        ));

    }

}
