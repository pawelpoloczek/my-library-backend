<?php

declare(strict_types=1);

namespace MyLibrary\Publication\Ui\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GetList
{
    #[Route('/publications', methods: ['GET'])]
    public function __invoke(): Response
    {
        return new JsonResponse([]);
    }
}
