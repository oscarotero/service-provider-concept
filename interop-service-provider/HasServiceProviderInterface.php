<?php

namespace Interop\ServiceProvider;

interface HasServiceProviderInterface
{
    public static function getServiceProvider(): ServiceProviderInterface;
}
