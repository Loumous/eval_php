<?php
namespace Lou\model;

use PDO;

class Clients{
    public $id;
    public $nom;
    public $prenom;
    public $email;

    public static function getAll(){
        $dbh= Dao::openDatabase();
        $query = "SELECT * FROM `clients`;";
        $sth = $dbh->prepare($query);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS,"Lou\\model\\clients");
        $infosClients = $sth->fetchAll();
        Dao::closeDatabase();
        return $infosClients;
    }

    public static function findById(int $clientId){
        $dbh = Dao::openDatabase();
        $query = "SELECT * FROM `clients` WHERE `id` = :clientId;";
        $sth = $dbh ->prepare($query);
        $sth ->bindParam(":clientId", $idRecupVu);
        $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, "Lou\\model\\Clients");
        $ClientTrouver = $sth->fetch();
        Dao::closeDatabase();
        return $ClientTrouver;
    }

}