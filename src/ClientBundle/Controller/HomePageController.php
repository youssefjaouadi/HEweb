<?php

namespace ClientBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;

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
    /**
     * @Route("/resto/{id}")
     */
    public function RestoPageAction($id)
    {
        $r=$this->getDoctrine()->getRepository("RestoBundle:Resto")->find($id);

        $em = $this->container->get('doctrine')->getManager();

        $query = $em->createQuery(
            'SELECT c.nomCat as nc , p as plat
            FROM RestoBundle:Categorie c , RestoBundle:Plat p
            WHERE c.idresto = :idresto
            AND c.idCat = p.idCat'
        )->setParameter('idresto', $id);



        $cats = $query->getResult();
        foreach ($cats as $cat)
        {
          echo($cat['nc'].$cat['test'].getNomPlat());
        }
        return $this->render('@Client/HomePage/restop.html.twig',array('resto'=>$r));
    }

}
