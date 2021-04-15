<?php
namespace Lou\controller;

use Lou\model\Chambres;
use Lou\View;

class ChambresController
{
    public static function listeChambres(){
        $ChambreRecupVue = chambres::getAll();
        View::setTemplate('listeChambres');
        View::bindVariable('listeChambres', $ChambreRecupVue);
        View::display();
    }

    public static function resultatChambreTrouver(int $id){
        $ChambreTrouver = chambres::findById($id);
        View::setTemplate('detailsChambres');
        View::bindVariable('DetailsChambreChoisie', $ChambreTrouver);
        View::display();
    }
}

