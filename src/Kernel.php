<?php
namespace App;

use App\DependencyInjection\AppExtension;
use Symfony\Bundle\FrameworkBundle\FrameworkBundle;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
//use Symfony\Bundle\TwigBundle\TwigBundle;
//use Symfony\Bundle\WebProfilerBundle\WebProfilerBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    public function registerBundles(): iterable
    {
        yield new FrameworkBundle();
        //yield new TwigBundle();

        if ('dev' === $this->getEnvironment()) {
            //yield new WebProfilerBundle();
        }
    }

    protected function build(ContainerBuilder $containerBuilder): void
    {
        //$containerBuilder->registerExtension(new AppExtension());
    }

    protected function configureContainer(ContainerConfigurator $container): void
    {
        // Global settings
        $container->parameters()
            ->set('app.admin_email', 'example@gmail.com');
        
        // PHP equivalent of config/packages/framework.yaml
        $container->extension('framework', [
            'secret' => 'S0ME_SECRET'
        ]);

        //$container->import(__DIR__.'/../config/framework.yaml');
        // register all classes in /src/ as service
        $container->services()
            ->load('App\\', __DIR__.'/*')
            ->autowire()
            ->autoconfigure()
        ;
        /*
        // configure WebProfilerBundle only if the bundle is enabled
        if (isset($this->bundles['WebProfilerBundle'])) {
            $container->extension('web_profiler', [
                'toolbar' => true,
                'intercept_redirects' => false,
            ]);
        }
        */
    }

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        // import the WebProfilerRoutes, only if the bundle is enabled
        if (isset($this->bundles['WebProfilerBundle'])) {
            //$routes->import('@WebProfilerBundle/Resources/config/routing/wdt.php', 'php')->prefix('/_wdt');
            //$routes->import('@WebProfilerBundle/Resources/config/routing/profiler.php', 'php')->prefix('/_profiler');
        }

        // load the routes defined as PHP attributes
        // (use 'annotation' as the second argument if you define routes as annotations)
        $routes->import(__DIR__.'/Controller/', 'attribute');
    }

    // optionally, you can define the getCacheDir() and getLogDir() methods
    // to override the default locations for these directories
}