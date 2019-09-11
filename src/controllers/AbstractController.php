<?php


namespace App\controllers;


use App\controllers\traits\TwigTrait;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController
{
use TwigTrait;

public function renderResponse(string $template,array $paramsTemplate=[])
{
    return new Response($this->render($template,$paramsTemplate));
}
}