<?php

namespace App\Containers\Account\Test\Functional\Api;

use App\Base\Parents\Test\ApiTestCase;

class PostAccountsTest extends ApiTestCase
{
    public function testCanGetDataIfEmpty(): void
    {
        $this->post('/account/api/accounts');

        $this->assertResponseIsSuccessful();
    }
}
