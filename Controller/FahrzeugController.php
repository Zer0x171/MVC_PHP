<?php
require_once("../Models/Fahrzeug.php");
require_once("../Database/Database.php");

if($_POST["hersteller"] != "" && $_POST["kennzeichen"] != "" && $_POST["ablaufdatum"] != ""){
    switch($_POST['action']){
        case 'add':
            $fahrzeug = new Fahrzeug();
            $fahrzeug->hersteller = $_POST['hersteller'];
            $fahrzeug->kennzeichen = $_POST['kennzeichen'];
            $fahrzeug->ablaufdatum = $_POST['ablaufdatum'];

            $mydb = new Database();
            $mydb->Connect();
            $mydb->Insert($fahrzeug);
            $mydb->Disconnect();
            break;
        case 'edit':
            break;
        default:
            break;
    }
}else{
    echo "nothing sent";
}

?>