<?php


namespace App\Controllers;


use Symfony\Component\HttpFoundation\RedirectResponse;

class DefaultController extends AbstractController
{
    public function homeAction()
    {
        return $this->renderResponse('core/home.html.twig');
    }


}
