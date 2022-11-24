<?php
    $conn = mysqli_connect('localhost','root','','test');
    $query = 'SELECT * FROM users';

    // Get result
    $result = mysqli_query($conn, $query);

    // Fetch the data
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($users);
