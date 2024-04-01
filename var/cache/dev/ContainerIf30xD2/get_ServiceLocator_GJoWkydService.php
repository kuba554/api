<?php

namespace ContainerIf30xD2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GJoWkydService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.gJoWkyd' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gJoWkyd'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'productImagesRepository' => ['privates', 'App\\Repository\\ProductImagesRepository', 'getProductImagesRepositoryService', true],
        ], [
            'productImagesRepository' => 'App\\Repository\\ProductImagesRepository',
        ]);
    }
}
