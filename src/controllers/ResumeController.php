<?php


namespace APP\controllers;


class ResumeController extends AbstractController
{
    public function resumeAction()
    {
        return $this->render('core/resume.html.twig');
    }

}