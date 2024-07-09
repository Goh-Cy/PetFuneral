<?php
global $conn;
include("connection.php");
$errors = array();

if (isset($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $adduser = "
            INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email', '$pass')
            ";

    $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if ($user['username'] === $username){
            array_push($errors, "Username already exists.");
        }
        if ($user['email'] === $email){
            array_push($errors, "Email already exists.");
        }
    }

    if (count($errors) == 0){
        if (mysqli_query($conn, $adduser)){
            echo "User added successfully.";
            header("location: home.php");
        } else{
            echo "Error inserting user: " . mysqli_error($conn);
        }
    } else{
        foreach($errors as $error){
            echo $error;
        }
        echo '<a href="register.php">Go Back</a>';
    }

    mysqli_close($conn);
}
?>
