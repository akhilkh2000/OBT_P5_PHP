<?php


namespace App\controllers;


class registrationController extends AbstractController
{

    public function registration()
    {
        return $this->registration('registrationFolder/registration.html.twig');
    }
}