<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\ServiceProviderInterface;
use Middlewares;

class DispatcherFactory implements ServiceProviderInterface
{
    public function get(ContainerInterface $container)
    {
        return new Middlewares\Utils\Dispatcher([
            $container->get('ResponseTime'),

            function () use ($container) {
                echo $container->get('Message')->getMessage();
            }
        ]);
    }
}
