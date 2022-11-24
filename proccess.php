<?php 
    // Connect to the database
    $conn = mysqli_connect('localhost','root','','test');
    echo("proccessing...");

    if (isset($_POST['name'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        echo 'GET: Your name is: '. $_POST['name'] . "<br><br>";

        $query = "INSERT INTO  users(name) VALUES ('$name')";
        if (mysqli_query($conn, $query)) {
            echo 'user added';
        } else {
            echo 'ERROR: ' . mysqli_error($conn);
        }
    }

    if (isset($_GET['name'])) {
        echo 'GET: Your name is: '. $_GET['name'];
    }

?>