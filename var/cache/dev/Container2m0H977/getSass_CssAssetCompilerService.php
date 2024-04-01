<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSass_CssAssetCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'sass.css_asset_compiler' shared service.
     *
     * @return \Symfonycasts\SassBundle\AssetMapper\SassCssCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'sass-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AssetMapper'.\DIRECTORY_SEPARATOR.'SassCssCompiler.php';

        return $container->privates['sass.css_asset_compiler'] = new \Symfonycasts\SassBundle\AssetMapper\SassCssCompiler([(\dirname(__DIR__, 4).'/assets/styles/app.scss')], (\dirname(__DIR__, 4).'/var/sass'), ($container->privates['sass.builder'] ?? $container->load('getSass_BuilderService')));
    }
}
