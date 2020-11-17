<?php
include "database.php";


function createRows(){
    global $connection;

    if(isset($_POST['submit']) ) {

        $username = $_POST['username'];
        $password = $_POST['password'];
    
        echo "User " . $username . " " . "successfully created.";
    
    }
    
    $query = "INSERT INTO users(username, password) ";
    $query .= "VALUES( '$username', '$password' ) ";
    
    $result = mysqli_query($connection, $query);
    
    if(!$result){
        echo "Unable to process your query at this time." . mysqli_error();
    }
}


function readRows () {
    global $connection;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result) {
        die('Query FAILED' . mysqli_error());
    }
        
while($row = mysqli_fetch_assoc($result)) {
        
        print_r($row);
    }  

}


function showAllData(){
    global $connection;

    global $result;

    $query = "SELECT * FROM users ";

    $result = mysqli_query($connection, $query);
    
    if (!$result ) {
        die("Unable to process your query at this time." . mysqli_error());
    };

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }

}

function UpdateAll(){
    if(isset($_POST['submit'])) {
    
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
            
        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id ";
            
            $result = mysqli_query($connection, $query);
            if(!$result) {
            
             die("QUERY FAILED" . mysqli_error($connection));
                 
            }else {
            
            echo "Record Updated"; 
            
            }
                
        }
}

function deleteRows(){
    if(isset($_POST['submit'])) {
    
        global $connection;
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
            
        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id ";
            
            $result = mysqli_query($connection, $query);
            if(!$result) {
            
             die("QUERY FAILED" . mysqli_error($connection));
                 
            } else {
            
            echo "Record ID: " . $id . " Deleted"; 
            
            }
                
        }
}


?>