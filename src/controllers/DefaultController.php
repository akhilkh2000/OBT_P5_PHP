<?php


namespace App\controllers;


class DefaultController extends AbstractController
{
    public function homeAction()
    {
        return $this->renderResponse('core/home.html.twig');
    }

    public function resume()
    {
        return $this->renderResponse('core/resume.html.twig');
    }

    public function notFound()
    {
        return $this->renderResponse('core/404.html.twig');
    }

    public function portFolio()
    {
        return $this->renderResponse('core/portfolio.html.twig');
    }

    public function blog()
    {
        return $this->renderResponse('core/blog.html.twig');
    }

    public function contact()
    {
        return $this->renderResponse('core/contact.html.twig');
    }

    public function registration()
    {
        return $this->renderResponse('registrationFolder/registration.html.twig');
    }

    public function connection()
    {
        return $this->renderResponse('connectionFolder/connection.html.twig');
    }


}
