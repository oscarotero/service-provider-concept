<?php
// php -S localhost:8888

require __DIR__.'/vendor/autoload.php';

$container = new Demo\Container('App\\Services\\');

$dispatcher = $container->get('Dispatcher');
$request = $container->get('ServerRequest');
$request = $container->get('ServerRequest');
$emitter = $container->get('Emitter');

$response = $dispatcher->dispatch($request);
$emitter->emit($response);
