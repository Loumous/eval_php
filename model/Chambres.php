<?php
namespace Lou\model;

use PDO;


class Chambres{
    public $Numero_chbr;
    public $Capacite;

    public static function getAll(){
        $dbh= Dao::openDatabase();
        $query = "SELECT * FROM `Chambres`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Lou\\model\\Chambres");
        $infosChambres = $sth->fetchAll();
        Dao::closeDatabase();
        return $infosChambres;
    }
    public static function findById(int $chambreId){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `clients` WHERE `id` = :chambreId;";
        $sth = $dbh ->prepare($query);
        $sth ->bindParam(":chambreId", $idRecupVu);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Lou\\model\\Clients");
        $ClientTrouver = $sth->fetch();
        Dao::closeDatabase();
        return $ClientTrouver;
    }

}