<?php
namespace Lou;

session_start();
use Lou\controllers\ChambresController;
use Lou\controllers\ClientsController;

require_once "vendor/autoload.php";

if (isset($_GET['page'])) 
{
    $page = $_GET['page'];
} 
else 
{
    $page = 'chambre';
}
switch ($page) 
{
    case 'chambre':
    ChambresController::listeChambres();
        break;
    case 'chambreAdetailler': 
        $idRecupEnGet = (int)$_GET['id'];
        ChambresController::resultatChambreTrouver($idRecupEnGet);
        break;
    default:
        break;
}