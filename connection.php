<?php
    $databaseHost = 'localhost';
    $databaseName = 'crud_pf';
    $databaseUsername = 'root';
    $databasePassword = '';

    $conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

    if (!$conn){
        die('Could not connect to the database: ' . mysqli_connect_error());
    }
?>
