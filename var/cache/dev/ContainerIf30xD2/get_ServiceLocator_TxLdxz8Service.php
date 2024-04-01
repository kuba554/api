<?php

namespace ContainerIf30xD2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TxLdxz8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TxLdxz8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TxLdxz8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'product' => ['privates', '.errored..service_locator.TxLdxz8.App\\Entity\\Product', NULL, 'Cannot autowire service ".service_locator.TxLdxz8": it needs an instance of "App\\Entity\\Product" but this type has been excluded in "config/services.yaml".'],
        ], [
            'product' => 'App\\Entity\\Product',
        ]);
    }
}
