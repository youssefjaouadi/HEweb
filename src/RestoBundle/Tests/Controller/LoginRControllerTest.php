<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class LoginRControllerTest extends WebTestCase
{
    public function testLoginr()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/loginr');
    }

}
