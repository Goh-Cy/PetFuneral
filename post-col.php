<?php
session_start();
?>

<?php
global $conn;
include_once("connection.php");

if (isset($_POST) && $_SESSION['loginStatus'] == 'yes')  {
    $product_name = $_POST['product-name'];
    $Type = $_POST['type'];
    $username = $_SESSION['username'];

    $validateWithCart = "SELECT * FROM reservation
                         WHERE username = '$username'";

    $addCart = "
            INSERT INTO reservation (username, service, type)
            VALUES ('$username', '$product_name', '$Type')
            ";

    $user_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if ($user['username'] === $username){
            if (mysqli_query($conn, $validateWithCart)){
                $row = mysqli_fetch_assoc(mysqli_query($conn, $validateWithCart));
                mysqli_query($conn, $addCart);
            }
        }
        else{
            echo "weight is empty";
        }
    }
//    header("location: " . $_SERVER['HTTP_REFERER']);
    mysqli_close($conn);
} else{
    header("location: login.php");
}
?>
