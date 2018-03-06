<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\ServiceProviderInterface;

class MiddlewaresFactory implements ServiceProviderInterface
{
    public function get(ContainerInterface $container)
    {
        return [
            $container->get('ResponseTime'),

            function () use ($container) {
                echo $container->get('Message')->getMessage();
            }
        ];
    }
}
