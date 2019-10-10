<?php


namespace App\Controllers;


class NotFoundController extends AbstractController
{
    public function notFound()
    {
        return $this->renderResponse('core/404.html.twig');
    }

}