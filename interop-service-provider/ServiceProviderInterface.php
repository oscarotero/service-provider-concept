<?php

namespace Interop\ServiceProvider;

use Psr\Container\ContainerInterface;

interface ServiceProviderInterface
{
    public function get(ContainerInterface $container);
}
