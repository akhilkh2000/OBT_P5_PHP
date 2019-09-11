<?php


namespace App\controllers;


class ConnectionController extends AbstractController
{
    public function connection()
    {
        return $this->connection('connectionFolder/connection.html.twig');
    }
}