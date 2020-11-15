<?php
include "database.php";
include "functions.php";

$query = "SELECT * FROM users ";

$result = mysqli_query($connection, $query);

if (!$result ) {
    die("Unable to process your query at this time." . mysqli_error($connection));
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
        <h1 class="text-center">Database Info</h1>
        <pre>
            <?php
            
            while ($row = mysqli_fetch_assoc($result)) {
                print_r($row);
            }

            ?>
        </pre>
        </div>

    </div>
</body>
</html>