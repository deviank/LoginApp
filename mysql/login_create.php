<?php
include "database.php";

if( isset($_POST['submit']) ) {

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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        
        <div class="col-xs-6">
        
            <form action="login_create.php" method="post">

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control"> 
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control"> 
                </div>

                <input class="btn btn-primary" type="submit" name="submit" value="Submit" >

            </form>   

        </div>

    </div>
</body>
</html>