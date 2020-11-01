<?php

        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if($connection){
            echo "We are connected to the Database.";
        } else {
            die("Database not connected.");
        }

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result){

            die("Query Failed." . mysqli_error($connection));
        }

?>