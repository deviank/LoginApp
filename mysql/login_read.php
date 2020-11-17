<?php
include "database.php";

include "functions.php";

include "includes/header.php";



?>

    <div class="container">
        
        <div class="col-xs-6">
            <h1 class="text-center">Database Info</h1>
            <pre>
                <?php readRows(); ?>
            </pre>
        </div>

<?php include "includes/footer.php" ?>