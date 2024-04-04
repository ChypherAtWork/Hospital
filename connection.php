<?php

    $database= new mysqli("127.0.0.1:3306","manav","password","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>
