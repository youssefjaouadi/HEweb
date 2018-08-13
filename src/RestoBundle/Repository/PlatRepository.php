<?php
/**
 * Created by PhpStorm.
 * User: Pc
 * Date: 09/04/2018
 * Time: 15:20
 */

namespace RestoBundle\Repository;


class PlatRepository extends \Doctrine\ORM\EntityRepository
{
    public function findByid_cat($id_cat){
        $db = $this->createQueryBuilder('p');
        $db->select('p')
            ->from('RestoBundle:Plat p')
            ->where('p.id_cat = ?',array($id_cat));
        if($db->getQuery()->getFirstResult()!=null )
        {return $db->getQuery()->getResult();}
        else return null;

    }


}