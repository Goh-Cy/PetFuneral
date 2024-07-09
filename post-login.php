<?php

global $conn;
include("connection.php");
session_start();
$user = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);

if (isset($_POST)){
    $validateWithDB = "SELECT * FROM users 
                       WHERE username='$user'
                       AND password='$pass'";

    if (mysqli_query($conn, $validateWithDB)){
        $row = mysqli_fetch_assoc(mysqli_query($conn, $validateWithDB));

        if (is_array($row) && !empty($row)){
            $validUser = $row['username'];
            $_SESSION['valid'] = $validUser;
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
        } else {
            echo "Invalid username or password.";
            echo "<br/>";
            echo "<a href='login.php'>Go Back</a>";
        }
        if(isset($_SESSION['valid'])){
            echo "Login successfully.";
            $_SESSION['username'] = $row['username'];
            $_SESSION['loginStatus'] = 'yes';
            header("Location: home.php");
        }
    } else{
        echo "Could not execute with select query.";
    }
}
?>
