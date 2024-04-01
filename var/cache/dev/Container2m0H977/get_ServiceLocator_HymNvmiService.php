<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_HymNvmiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.HymNvmi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.HymNvmi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriesTreeRepository' => ['privates', 'App\\Repository\\CategoriesTreeRepository', 'getCategoriesTreeRepositoryService', true],
        ], [
            'categoriesTreeRepository' => 'App\\Repository\\CategoriesTreeRepository',
        ]);
    }
}