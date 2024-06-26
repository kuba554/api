<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoriesTreeControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CategoriesTreeController' shared autowired service.
     *
     * @return \App\Controller\CategoriesTreeController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CategoriesTreeController.php';

        $container->services['App\\Controller\\CategoriesTreeController'] = $instance = new \App\Controller\CategoriesTreeController();

        $instance->setContainer(($container->privates['.service_locator.7sZf2Jf'] ?? $container->load('get_ServiceLocator_7sZf2JfService'))->withContext('App\\Controller\\CategoriesTreeController', $container));

        return $instance;
    }
}
