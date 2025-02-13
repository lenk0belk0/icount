<?php

namespace App\Base\Parents\Test;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class ApiTestCase extends WebTestCase
{
    private $client;

    protected function setUp(): void
    {
        $this->client = static::createClient();
    }

    public function get(string $endpoint): Response
    {
        $this->client->request('GET', $endpoint);

        return $this->client->getResponse();
    }

    public function post(string $endpoint): Response
    {
        $this->client->request('POST', $endpoint);

        return $this->client->getResponse();
    }
}
