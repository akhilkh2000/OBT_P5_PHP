<?php


namespace App\controllers;


class contactController extends AbstractController
{
public function contact()
    {
        return $this->render('core/contact.html.twig');
    }
}