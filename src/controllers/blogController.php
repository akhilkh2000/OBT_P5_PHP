<?php


namespace App\controllers;


class blogController
{
    public function blog()
    {
        return $this->render('core/blog.html.twig');
    }
}