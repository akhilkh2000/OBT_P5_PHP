<?php


namespace App\Controllers;


class ConnectController extends AbstractController
{

    public function Connect()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//            $resistData = $this->getGlobalPHP('POST');
            dump ($_POST);
            return $this->renderResponse ("core/profilUpdate.html.twig");
        }


        return $this->renderResponse('connectionFolder/Connection.html.twig');
    }
}