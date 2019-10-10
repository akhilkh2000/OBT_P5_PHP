<?php


namespace App\Controllers;


class BlogController extends AbstractController
{
    public function blog()
    {
        return $this->renderResponse('core/blog.html.twig');
    }
}