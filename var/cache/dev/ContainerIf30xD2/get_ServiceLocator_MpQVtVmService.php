<?php

namespace ContainerIf30xD2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_MpQVtVmService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.MpQVtVm' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.MpQVtVm'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'productImage' => ['privates', '.errored..service_locator.MpQVtVm.App\\Entity\\ProductImages', NULL, 'Cannot autowire service ".service_locator.MpQVtVm": it needs an instance of "App\\Entity\\ProductImages" but this type has been excluded in "config/services.yaml".'],
        ], [
            'productImage' => 'App\\Entity\\ProductImages',
        ]);
    }
}