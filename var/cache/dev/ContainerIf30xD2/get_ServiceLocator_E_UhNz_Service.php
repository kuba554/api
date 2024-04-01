<?php

namespace ContainerIf30xD2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_E_UhNz_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.e.uhNz.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.e.uhNz.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'user' => ['privates', '.errored..service_locator.e.uhNz..App\\Entity\\User', NULL, 'Cannot autowire service ".service_locator.e.uhNz.": it needs an instance of "App\\Entity\\User" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'security' => '?',
            'user' => 'App\\Entity\\User',
        ]);
    }
}
