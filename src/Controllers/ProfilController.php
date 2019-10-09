<?php


namespace App\Controllers;


class ProfilController extends AbstractController
{

    public function Profil()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $resistData = $this->getGlobalPHP('POST');
            return $this->renderResponse ("core/profilUpdate.html.twig");
        }


        return $this->renderResponse('connectionFolder/profil.html.twig');
    }
}