<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Dotenv\Dotenv;

class MicroController extends AbstractController
{
    #[Route('/')]
    public function home(): Response
    {   
        $projectDir = $this->getParameter('kernel.project_dir');

        $dotenv = new Dotenv();       
        $dotenv->loadEnv($projectDir.'/.env', overrideExistingVars: true);
        
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
        $adminEmail = $this->getParameter('app.admin_email');
        
        return new Response('Login:  '.$adminEmail);
    }
}