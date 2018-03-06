<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\ServiceProviderInterface;
use Zend\Diactoros\Response\SapiEmitter;

class EmitterFactory implements ServiceProviderInterface
{
    public function get(ContainerInterface $container)
    {
        return new SapiEmitter();
    }
}
