<?php


namespace App\controllers;


class DefaultController extends AbstractController
{
    public function homeAction()
    {
        return $this->render('core/home.html.twig');
    }

    public function resume()
    {
        return $this->render('core/resume.html.twig');
    }

    public function notFound()
    {
        return $this->render('core/404.html.twig');
    }

}
