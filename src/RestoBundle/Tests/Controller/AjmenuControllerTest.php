<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AjmenuControllerTest extends WebTestCase
{
    public function testDisplaymenu()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/menu');
    }

}
