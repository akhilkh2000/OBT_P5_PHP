<?php

use App\controllers\NotFoundController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;

require "../vendor/autoload.php";

$request = Request::createFromGlobals();

$router = new \App\application\RouterApplication($request);
$router->initRouter();

try{
   $response = $router->run();
   $response->send();
}catch (ResourceNotFoundException $e) {
    $controller= new NotFoundController();
    $controller->notFound()->send();
};

