<?php

namespace Container2m0H977;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommentNotificationSubscriberService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\EventSubscriber\CommentNotificationSubscriber' shared autowired service.
     *
     * @return \App\EventSubscriber\CommentNotificationSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'CommentNotificationSubscriber.php';

        $a = ($container->privates['mailer.mailer'] ?? $container->load('getMailer_MailerService'));

        if (isset($container->privates['App\\EventSubscriber\\CommentNotificationSubscriber'])) {
            return $container->privates['App\\EventSubscriber\\CommentNotificationSubscriber'];
        }

        return $container->privates['App\\EventSubscriber\\CommentNotificationSubscriber'] = new \App\EventSubscriber\CommentNotificationSubscriber($a, ($container->services['router'] ?? self::getRouterService($container)), ($container->services['translator'] ?? self::getTranslatorService($container)), 'anonymous@example.com');
    }
}
