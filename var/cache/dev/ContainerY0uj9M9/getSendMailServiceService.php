<?php

namespace ContainerY0uj9M9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSendMailServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\SendMailService' shared autowired service.
     *
     * @return \App\Service\SendMailService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/SendMailService.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/MailerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/mailer/Mailer.php';

        $a = ($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService'));

        if (isset($container->privates['App\\Service\\SendMailService'])) {
            return $container->privates['App\\Service\\SendMailService'];
        }
        $b = ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container));

        if (isset($container->privates['App\\Service\\SendMailService'])) {
            return $container->privates['App\\Service\\SendMailService'];
        }
        $c = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['App\\Service\\SendMailService'])) {
            return $container->privates['App\\Service\\SendMailService'];
        }

        return $container->privates['App\\Service\\SendMailService'] = new \App\Service\SendMailService(new \Symfony\Component\Mailer\Mailer($a, $b, $c));
    }
}
