<?php
session_start();
?>

<?php
global $conn;
include_once("connection.php");

if (isset($_POST) && $_SESSION['loginStatus'] == 'yes')  {
    $product_name = $_POST['product-name'];
    $product_img_link = $_POST['product-img-link'];
    $weight = $_POST['weight'];
    $qty = $_POST['product-qty'];
    $price = $_POST['price'];
    $singlePrice = $_POST['singlePrice'];
    $cremationType = $_POST['cremation-type'];
    $username = $_SESSION['username'];

    $validateWithCart = "SELECT * FROM cart
                         WHERE username = '$username'";

    $addCart = "
            INSERT INTO cart (username, product_name, product_img_link, quantity, weight, price, singlePrice, type)
            VALUES ('$username', '$product_name', '$product_img_link', '$qty', '$weight', '$price', '$singlePrice', '$cremationType')
            ";

    $user_check_query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if ($user['username'] === $username and (!empty($weight))){
            if (mysqli_query($conn, $validateWithCart)){
                $row = mysqli_fetch_assoc(mysqli_query($conn, $validateWithCart));

                if (is_array($row) && !empty($row)){
                    $dupProduct = $row['product_name'];
                    if ($dupProduct == $product_name){
                        mysqli_query($conn, "UPDATE cart SET quantity='$qty', weight='$weight' WHERE username='$username'");
                    } else{
                        mysqli_query($conn, $addCart);
                    }
                } else{
                    mysqli_query($conn, $addCart);
                }
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
