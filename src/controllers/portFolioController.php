<?php


namespace App\controllers;


class portFolioController extends AbstractController
{
    public function portFolio()
    {
        return $this->render('core/portfolio.html.twig');
    }

}