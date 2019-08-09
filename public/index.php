<?php

use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Loader\YamlFileLoader;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;

require "../vendor/autoload.php";

$fileLocator = new FileLocator([__DIR__.'/../']);
$loader= new YamlFileLoader($fileLocator);
$routes=$loader->load('config/app/routes.yaml');

$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes,$context);

try{
    $params = $matcher->match($context->getPathInfo());
    $controllerName = explode('::', $params['_controller']);
//    $controller = "App\\Controllers\\"
    dump($controllerName);
}catch (ResourceNotFoundException $e) {
    echo 'La page n\'existe pas';
};

