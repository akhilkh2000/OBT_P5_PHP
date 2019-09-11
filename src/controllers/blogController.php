<?php


namespace App\controllers;


class blogController extends AbstractController
{
    public function blog()
    {
        return $this->render('core/blog.html.twig');
    }
}