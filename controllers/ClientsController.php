<?php
namespace Lou\controller;

use Lou\model\Clients;
use Lou\View;

class ClientsController
{
    public static function listeClients($page){
        $RecupinfosClients = Clients::getAll();
        View::setTemplate('listeChambres');
        View::bindVariable("affichageChambres", $RecupinfosClients);
        View::display();
    }

    public static function InscriptionClients($page){
        $Recupinscription = Clients::getAll();
        View::setTemplate('inscription');
        View::display();
    }

}