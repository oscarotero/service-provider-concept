<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\ServiceProviderInterface;
use Middlewares;

class ResponseTimeFactory implements ServiceProviderInterface
{
    public function get(ContainerInterface $container)
    {
        return new Middlewares\ResponseTime();
    }
}
