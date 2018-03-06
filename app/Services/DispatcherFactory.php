<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\ServiceProviderInterface;
use Middlewares;

class DispatcherFactory implements ServiceProviderInterface
{
    public function get(ContainerInterface $container)
    {
        $middlewares = $container->get('Middlewares');

        return new Middlewares\Utils\Dispatcher($middlewares);
    }
}
