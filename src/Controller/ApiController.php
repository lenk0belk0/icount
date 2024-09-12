<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class ApiController extends AbstractController
{
    #[Route('/api/v1', name: 'app_api_v1')]
    public function v1(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to API version 1!',
        ]);
    }
}
