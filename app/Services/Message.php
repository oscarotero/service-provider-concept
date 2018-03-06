<?php

namespace App\Services;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\HasServiceProviderInterface;
use Interop\ServiceProvider\ServiceProviderInterface;

class Message implements HasServiceProviderInterface
{
    private $message;

    public static function getServiceProvider(): ServiceProviderInterface
    {
        return new class implements ServiceProviderInterface {
            public function get(ContainerInterface $container)
            {
                return new Message('It works!');
            }
        };
    }

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage()
    {
        return $this->message;
    }
}
