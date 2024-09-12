<?php

namespace App\Tests\Controller\Api\V1;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetInfoTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $crawler = $client->request('GET', '/api/v1');

        $this->assertResponseIsSuccessful();

        $response = $client->getResponse();
        $this->assertJson($response->getContent());
    }
}
