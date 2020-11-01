<?php

    if(isset($_POST['submit'])){

        $username = $_POST['username'];
        $password = $_POST['password'];
        $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
        if($connection){
            echo "We are connected to the Database and user " . $username . " " . " has been created";
        } else {
            die("Database not connected.");
        }

        $query = "INSERT INTO users( username, password)";
        $query .= "VALUES ('$username', '$password')";

        $result = mysqli_query($connection, $query);

        if(!$result){

            die("Query Failed." . mysqli_error($connection));
        }

    }



?>