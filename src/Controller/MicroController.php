<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MicroController extends AbstractController
{
    #[Route('/random/{limit}')]
    public function randomNumber(int $limit): Response
    {
        $number = random_int(0, $limit);

        return new JsonResponse([
            'number' => random_int(0, $limit)
        ]);
    }
}