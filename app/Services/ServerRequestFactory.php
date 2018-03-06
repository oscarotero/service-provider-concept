<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\ServiceProviderInterface;
use Zend\Diactoros\ServerRequestFactory as DiactorosServerRequestFactory;

class ServerRequestFactory implements ServiceProviderInterface
{
    public function get(ContainerInterface $container)
    {
        return DiactorosServerRequestFactory::fromGlobals();
    }
}
