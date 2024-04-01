<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OzMJT7bService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ozMJT7b' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ozMJT7b'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriesTree' => ['privates', '.errored..service_locator.ozMJT7b.App\\Entity\\CategoriesTree', NULL, 'Cannot autowire service ".service_locator.ozMJT7b": it needs an instance of "App\\Entity\\CategoriesTree" but this type has been excluded in "config/services.yaml".'],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'categoriesTree' => 'App\\Entity\\CategoriesTree',
            'entityManager' => '?',
        ]);
    }
}
