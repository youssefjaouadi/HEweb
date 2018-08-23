<?php
/**
 * Created by PhpStorm.
 * User: Pc
 * Date: 09/04/2018
 * Time: 15:20
 */

namespace RestoBundle\Repository;
use Doctrine\ORM\EntityRepository;


class RestoRepository extends \Doctrine\ORM\EntityRepository
{
    public function getloc($lat,$long,$rad){
     //   $int=3959 *acos( cos( deg2rad(36.85725399999999 ) * cos( deg2rad( 36.85725399999999 ) ) * cos( deg2rad( 10.187966899999992 ) - deg2rad(10.187966899999992) ) + sin( deg2rad(36.85725399999999) ) * sin( deg2rad( 36.85725399999999) ) )) ;
   /*     $db = $this->createQueryBuilder('r');
       // $db->select('r,'.(6371 *acos( cos( 36.85725399999999  * cos( deg2rad( 36.85725399999999 ) ) * cos( deg2rad( 10.187966899999992 ) - deg2rad(10.187966899999992) ) + sin( deg2rad(36.85725399999999) ) * sin( deg2rad( 36.85725399999999) ) )) ).' AS distance')
        $db->select('r,'. 3959 *acos( cos( deg2rad(36.85725399999999 ) * cos( deg2rad( 36.85725399999999 ) ) * cos( deg2rad( 10.187966899999992 ) - deg2rad(10.187966899999992) ) + sin( deg2rad(36.85725399999999) ) * sin( deg2rad( 36.85725399999999) ) )).' AS distance'  )
                ->from('RestoBundle:Resto','t');



        return $db->getQuery()->getResult();
*/
        $em = $this->getEntityManager();
        $connection = $em->getConnection();
        $sql = "SELECT *, ( 6371 * acos( cos( radians($lat) ) * cos( radians( ltdResto ) ) * cos( radians( lngResto ) - radians($long) ) + sin( radians($lat) ) * sin( radians( ltdResto ) ) ) ) AS distance FROM resto HAVING distance < $rad ORDER BY distance  ";
        $statement = $connection->prepare($sql);
        $statement->execute();
        $results = $statement->fetchAll();
        return $results;
    }


}