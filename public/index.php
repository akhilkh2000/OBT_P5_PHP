<?php

use App\controllers\NotFoundController;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Router;

require "../vendor/autoload.php";

$fileLocator = new FileLocator([__DIR__.'/../']);


$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);
$router = New Router(
    new YamlFileLoader($fileLocator),
    'config/app/routes.yaml',
    [],
    $context
);



try{
    $parameters = $router->match($request->getPathInfo());
    $controllerName = explode('::', $parameters['_controller']);
    $controller = "App\\Controllers\\".$controllerName[0];
    $method =$controllerName[1];
    $controller = new $controller();

    unset($parameters['_route']);
    unset($parameters['_controller']);

    echo (call_user_func_array([$controller, $method], $parameters));


}catch (ResourceNotFoundException $e) {
    $method= new NotFoundController();
   echo $method->notFound();
};

