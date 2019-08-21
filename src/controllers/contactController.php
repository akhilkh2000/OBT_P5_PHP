<?php


namespace App\controllers;


class contactController
{
public function contact()
    {
        return $this->render('core/contact.html.twig');
    }
}