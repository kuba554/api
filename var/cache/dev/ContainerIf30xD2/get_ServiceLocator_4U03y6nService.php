<?php

namespace ContainerIf30xD2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_4U03y6nService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.4U03y6n' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.4U03y6n'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriesTree' => ['privates', '.errored..service_locator.4U03y6n.App\\Entity\\CategoriesTree', NULL, 'Cannot autowire service ".service_locator.4U03y6n": it needs an instance of "App\\Entity\\CategoriesTree" but this type has been excluded in "config/services.yaml".'],
        ], [
            'categoriesTree' => 'App\\Entity\\CategoriesTree',
        ]);
    }
}