<?php

namespace ContainerYQlwPUY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_3M5uxVkService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.3M5uxVk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.3M5uxVk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'category' => ['privates', '.errored..service_locator.3M5uxVk.App\\Entity\\Categories', NULL, 'Cannot autowire service ".service_locator.3M5uxVk": it needs an instance of "App\\Entity\\Categories" but this type has been excluded in "config/services.yaml".'],
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
        ], [
            'category' => 'App\\Entity\\Categories',
            'productsRepository' => 'App\\Repository\\ProductsRepository',
        ]);
    }
}
