<?php


namespace App\Controllers;


class ResumeController extends AbstractController
{
    public function resume()
    {
        return $this->renderResponse('core/resume.html.twig');
    }

}