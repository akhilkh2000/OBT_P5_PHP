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

    public function portFolio()
    {
        return $this->render('core/portfolio.html.twig');
    }

    public function blog()
    {
        return $this->render('core/blog.html.twig');
    }

    public function contact()
    {
        return $this->render('core/contact.html.twig');
    }

    public function registration()
    {
        return $this->render('registration/registration.html.twig');
    }
}
