<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DashboardControllerControllerTest extends WebTestCase
{
    public function testRestohome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/RestoHome');
    }

}
