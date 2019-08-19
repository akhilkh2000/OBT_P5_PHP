<?php


namespace App\controllers;


class NotFoundController extends AbstractController
{
    public function notFound()
    {
        return $this->render('core/404.html.twig');
    }

}