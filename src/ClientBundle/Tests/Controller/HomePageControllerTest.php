<?php

namespace ClientBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomePageControllerTest extends WebTestCase
{
    public function testDisplayhome()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/home');
    }

}
