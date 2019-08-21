<?php


namespace App\controllers;


class registrationController
{

    public function registration()
    {
        return $this->registration('registration/registration.html.twig');
    }
}