<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommandeRControllerTest extends WebTestCase
{
    public function testDisplaycmd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/commande');
    }

}
