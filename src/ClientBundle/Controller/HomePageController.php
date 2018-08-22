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

        $q1 = $em->createQuery(
                'SELECT   IDENTITY (p.idCat) as idc, p.nomPlat as np,p.prixPlat as pp,p.descriptionPlat as dp,p.imageplat as ip  ,c.imgCat ic
                FROM RestoBundle:Categorie c , RestoBundle:Plat p
                WHERE c.idresto = :idresto
                    AND c.idCat = p.idCat
                   
           '
        )->setParameter('idresto', $id);



        $plats = $q1->getResult();
        $q2= $em->createQuery(
            'SELECT   c.nomCat as nomc,c.imgCat as ic  , c.idCat as idc  
                FROM RestoBundle:Categorie c
                WHERE c.idresto = :idresto
                GROUP  BY c.idCat    
           '
        )->setParameter('idresto', $id);
        $cats = $q2->getResult();
            $menu = array();


            foreach ($plats as $plat) {
                foreach ($cats as $cat) {
            if ($cat['idc'] == $plat['idc'] ) {
                $menu[$cat['nomc']]["imc"] =  $cat['ic'];
                $menu[$cat['nomc']][] = $plat;





            }

            }


            }


        return $this->render('@Client/HomePage/restop.html.twig',array('resto'=>$r,'menu'=>$menu));
    }

}
