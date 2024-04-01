<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDownloadProductStockCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\DownloadProductStockCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\DownloadProductStockCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:download-product-stock', [], 'Add a short description for your command', false, #[\Closure(name: 'App\\Command\\DownloadProductStockCommand')] fn (): \App\Command\DownloadProductStockCommand => ($container->privates['App\\Command\\DownloadProductStockCommand'] ?? $container->load('getDownloadProductStockCommandService')));
    }
}
