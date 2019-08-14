<?php


namespace APP\controllers;


class DefaultController extends AbstractController
{
    public function homeAction()
    {
        return $this->render('core/home.html.twig');
    }

}
