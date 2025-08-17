<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MicroController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {   
        $projectDir = $this->getParameter('kernel.project_dir');
        
        return new Response('<h1>Hello World!<pre> ['.
            $projectDir.']('.$_ENV['DATABASE_URL'].')'
        );
    }
    #[Route('/api/v1/')]
    public function index(): Response
    {
        $number = random_int(0, 100);

        return new JsonResponse([
            'number' =>  $number
        ]);
    }
    #[Route('/login')]
    public function login(): Response
    {
        

        
        $adminEmail = 'king'; //$this->getParameter('app.admin_email');


        return new Response('Login '.$projectDir.' contact: '.$adminEmail);
    }
}