<?php

namespace App\Containers\Account\Test\Functional\Api;

use App\Base\Parents\Test\ApiTestCase;

class GetAccountsTest extends ApiTestCase
{
    public function testCanGetDataIfEmpty(): void
    {
        $this->get('/account/api/accounts');

        $this->assertResponseIsSuccessful();
    }
}
