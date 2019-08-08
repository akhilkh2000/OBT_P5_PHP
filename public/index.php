<?php

use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

require "../vendor/autoload.php";

$routeHome = new Route(
    '/home',
    [
        '_controller'=>'homeController',
    ]

);

$routes = new RouteCollection();
$routes->add('homepage', $routeHome);

$context = new RequestContext(
    '/',
    $_SERVER['REQUEST_METHOD'],
    $_SERVER['SERVER_NAME'],
    'http',
    80,
    443,
    $_SERVER['REQUEST_URI']
);


$matcher = new UrlMatcher($routes,$context);


try{
    $params = $matcher->match($context->getPathInfo());
    var_dump($params);
}catch (ResourceNotFoundException $e) {
    echo 'La page n\'existe pas';
};

