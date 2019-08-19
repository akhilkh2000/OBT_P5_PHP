<?php


namespace App\controllers;


class ResumeController extends AbstractController
{
    public function resume()
    {
        return $this->render('core/resume.html.twig');
    }

}