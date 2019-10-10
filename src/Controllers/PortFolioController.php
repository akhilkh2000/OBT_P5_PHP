<?php


namespace App\Controllers;


class PortFolioController extends AbstractController
{
    public function portFolio()
    {
        return $this->renderResponse('core/portfolio.html.twig');
    }

}