<?php

namespace App\Container;

use Psr\Container\NotFoundExceptionInterface;
use Exception;

class NotFoundException extends ContainerException implements NotFoundExceptionInterface
{
}
