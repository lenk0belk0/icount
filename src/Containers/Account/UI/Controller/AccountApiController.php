<?php

namespace App\Containers\Account\UI\Controller;

use App\Base\Parents\Controller\AbstractApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/account/api', name: 'app_account_api_')]
class AccountApiController extends AbstractApiController
{
    #[Route('/accounts', name: 'get_accounts')]
    public function getAccounts(): JsonResponse
    {
        return $this->json([]);
    }

    public function postAccounts(): JsonResponse
    {
        return $this->json([]);
    }
}
