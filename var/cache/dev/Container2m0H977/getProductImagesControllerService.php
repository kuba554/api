<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductImagesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductImagesController' shared autowired service.
     *
     * @return \App\Controller\ProductImagesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'ProductImagesController.php';

        $container->services['App\\Controller\\ProductImagesController'] = $instance = new \App\Controller\ProductImagesController(($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)));

        $instance->setContainer(($container->privates['.service_locator.7sZf2Jf'] ?? $container->load('get_ServiceLocator_7sZf2JfService'))->withContext('App\\Controller\\ProductImagesController', $container));

        return $instance;
    }
}
