<?php 
    echo("proccessing...");
    if (isset($_GET['name'])) {
        echo 'GET: Your name is: '. $_GET['name'];
    }

?>