<?php

namespace App\Base\Parents\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as FrameworkController;

class AbstractApiController extends FrameworkController
{
    protected const BASE_URL = 'api/v1';
}
