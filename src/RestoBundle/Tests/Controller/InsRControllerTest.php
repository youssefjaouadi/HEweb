<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InsRControllerTest extends WebTestCase
{
    public function testDisplayinsr()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/signupr');
    }

}
