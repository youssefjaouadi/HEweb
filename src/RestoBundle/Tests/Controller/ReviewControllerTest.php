<?php

namespace RestoBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReviewControllerTest extends WebTestCase
{
    public function testDisplayreview()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/review');
    }

}
