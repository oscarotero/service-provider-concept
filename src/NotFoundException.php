<?php

namespace Demo;

use Psr\Container\NotFoundExceptionInterface;
use Exception;

class NotFoundException extends ContainerException implements NotFoundExceptionInterface
{
}
