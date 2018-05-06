<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProfilControllerTest extends WebTestCase
{
    public function testDisplayprofile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/profile');
    }

}
