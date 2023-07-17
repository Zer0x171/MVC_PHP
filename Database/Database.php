<?php
// 1. Verbindung zur Datenbank
// 2. Schnittstelle

class Database{

    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "db";

    private $mysqlConnection;

    public function Connect(){
        $this->mysqlConnection = new PDO("mysql:host=$this->server;", $this->username, $this->password);
        $this->mysqlConnection->query("CREATE DATABASE IF NOT EXISTS $this->database");
        $this->mysqlConnection->query("use $this->database");
        $this->check_db();
    }

    public function Disconnect(){
    }

    public function Insert(){
    }

    public function Select(){
    }

    public function Delete(){
    }

    public function Update(){
    }

    public function check_db(){
        $check = $this->mysqlConnection->query("SELECT * FROM fahrzeug");
        if(!$check){
            $this->create_db();
        }
    }

    public function create_db(){
        $create_tables = 
        
        "CREATE TABLE fahrzeug (
            id int NOT NULL AUTO_INCREMENT, 
            PRIMARY KEY(id),
            hersteller text,
            kennzeichen text,
            ablaufdatum text);";

    $this->mysqlConnection->query($create_tables);
    }

}

?>