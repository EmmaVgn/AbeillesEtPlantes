<?php

namespace ContainerYQlwPUY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1cl9pCnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1cl9pCn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1cl9pCn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'categoriesRepository' => ['privates', 'App\\Repository\\CategoriesRepository', 'getCategoriesRepositoryService', true],
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
        ], [
            'categoriesRepository' => 'App\\Repository\\CategoriesRepository',
            'productsRepository' => 'App\\Repository\\ProductsRepository',
        ]);
    }
}
