<?php

    $connection = mysqli_connect('localhost', 'root' , '' , 'loginapp');

    if (!$connection) {
        die('Could not connect: ' . mysql_error());
    }
?>