<?php

namespace Demo;

use Psr\Container\ContainerInterface;
use Interop\ServiceProvider\HasServiceProviderInterface;
use Interop\ServiceProvider\ServiceProviderInterface;

class Container implements ContainerInterface
{
    private $services = [];
    private $namespace;

    public function __construct($namespace = '')
    {
        $this->namespace = $namespace;
    }

    public function get($id)
    {
        if (array_key_exists($id, $this->services)) {
            return $this->services[$id];
        }

        return $this->services[$id] = $this->create($id);
    }

    public function set($id, $value)
    {
        $this->services[$id] = $value;
    }

    public function has($id)
    {
        if (array_key_exists($id, $this->services)) {
            return true;
        }

        if (class_exists($id)) {
            return true;
        }
    }

    private function create($id)
    {
        $class = $id;

        if (!class_exists($class)) {
            $class = $this->namespace.$class;
        }

        if (class_exists($class) && isset(class_implements($class)[HasServiceProviderInterface::class])) {
            return $class::getServiceProvider()->get($this);
        }

        //Autodetect factories
        $class = $id.'Factory';

        if (!class_exists($class)) {
            $class = $this->namespace.$class;
        }

        if (class_exists($class) && isset(class_implements($class)[ServiceProviderInterface::class])) {
            return (new $class())->get($this);
        }

        throw new NotFoundException("Service {$id} is not found");
    }
}
