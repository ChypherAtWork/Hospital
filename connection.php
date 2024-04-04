<?php

    $database= new mysqli("localhost","manav","password","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }
?>
