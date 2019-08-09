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

dump($routes);
//$routes = new RouteCollection();
//$routes->add('homepage', $routeHome);
//$routes->add('details_resume', $routeResume);

$request = Request::createFromGlobals();
$context = new RequestContext();
$context->fromRequest($request);

$matcher = new UrlMatcher($routes,$context);


try{
    $params = $matcher->match($context->getPathInfo());
    dump($params);
}catch (ResourceNotFoundException $e) {
    echo 'La page n\'existe pas';
};

