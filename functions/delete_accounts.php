<?php

    include "../database/connection.php";

    $id = $_GET['id'];

    if(isset($id)){
        $sql = "DELETE FROM user_accounts WHERE account_id = $id";
        $delete = $connection->query($sql);

        if($connection->query($sql) == TRUE){
            header("location: ../index.php");
            exit();
        }
    }

    $connection->close();

?>