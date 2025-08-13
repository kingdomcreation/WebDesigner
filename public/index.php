<?php

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureContainer(ContainerConfigurator $container): void
    {
        // PHP equivalent of config/packages/framework.yaml
        $container->extension('framework', [
            'secret' => 'S0ME_SECRET'
        ]);
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routes->add('random_number', '/random/{limit}')->controller([$this, 'randomNumber']);
    }

    public function randomNumber(int $limit): JsonResponse
    {
        return new JsonResponse([
            'number' => random_int(0, $limit),
        ]);
    }
}

return static function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
