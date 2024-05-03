<?php

namespace ContainerHsJ3lhM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\CartService' shared autowired service.
     *
     * @return \App\Service\CartService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/CartService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        if (isset($container->privates['App\\Service\\CartService'])) {
            return $container->privates['App\\Service\\CartService'];
        }

        return $container->privates['App\\Service\\CartService'] = new \App\Service\CartService(($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), $a);
    }
}
