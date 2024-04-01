<?php

namespace ContainerIf30xD2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDownloadUnitsCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\DownloadUnitsCommand' shared autowired service.
     *
     * @return \App\Command\DownloadUnitsCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DownloadUnitsCommand.php';

        $container->privates['App\\Command\\DownloadUnitsCommand'] = $instance = new \App\Command\DownloadUnitsCommand(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));

        $instance->setName('app:download-units');
        $instance->setDescription('Add a short description for your command');

        return $instance;
    }
}
