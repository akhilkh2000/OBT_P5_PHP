<?php

use App\application\RouterApplication;
use App\controllers\NotFoundController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\HttpFoundation\Response;


require "../vendor/autoload.php";

$request = Request::createFromGlobals();

$router = new RouterApplication($request);
$router->initRouter();

try{
        $response = $router->run ();

//        $response = new Response($response);
        $response->send();
    } catch (ResourceNotFoundException $e) {dump ($e);
        $controller= new NotFoundController();
        $response = $controller->notFound ();
        $response->send();
}

