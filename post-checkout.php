<?php
session_start();
?>

<?php
global $conn;
include_once("connection.php");

$userid = $_SESSION['username'];

$clearCart = "DELETE  FROM cart WHERE username = '$userid'";

if (mysqli_query($conn, $clearCart)){
    echo "Payment successful. Thank you.";
    header("Refresh:2; url=cart.php");
} else{
    echo "Payment failed.";
}
