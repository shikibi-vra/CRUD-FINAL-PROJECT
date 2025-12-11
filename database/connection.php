<?php 
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "youtube";

    $connection = new mysqli(
        $server,
        $user,
        $password,
        $database,
        
    );

    if($connection->connect_error){
        die("Database did not connect");
    }

    echo "Database has connected"
?>