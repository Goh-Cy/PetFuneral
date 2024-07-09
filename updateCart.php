<?php
    session_start();
?>

<?php
    global $conn;
    include_once ("connection.php");
    foreach ($_POST as $key => $value){
        $new_product[$key] = $value;
        echo $value;
    }

    $key_array = array_keys($new_product);
    print_r($key_array);
    if (is_float($new_product[$key_array[3]])){
        echo '';
    } else{
        $formatted = preg_replace('/[0-9]+/', '' ,$new_product[$key_array[3]]);
    }
    echo $formatted;

    if ($formatted == 'upQty') {
        $btn = $key_array[3];

        if (isset($_POST[$btn]) == 'down') {
            $username = $_SESSION['username'];

            $product = $new_product[$key_array[0]];
            $newQty = $new_product[$key_array[2]];
            $newPrice = $new_product[$key_array[4]];

            $cart_check_query = "SELECT quantity, price FROM cart WHERE username='$username' AND product_name='$product'";
            $result = mysqli_query($conn, $cart_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                mysqli_query($conn, "UPDATE cart SET quantity='$newQty', price='$newPrice' WHERE username='$username' AND product_name='$product'");
            } else {
                echo "failed";
            }
        } else {
            echo "isset failed";
        }

    } else {
        $username = $_SESSION['username'];

        $product = $new_product[$key_array[0]];
        $newQty = $new_product[$key_array[3]];
        $newPrice = $new_product[$key_array[4]];

        if ($newQty == 0){
            $delete = "DELETE FROM cart WHERE username='$username' AND product_name='$product'";
            mysqli_query($conn, $delete);
        } else{
            $cart_check_query = "SELECT quantity, price FROM cart WHERE username='$username' AND product_name='$product'";
            $result = mysqli_query($conn, $cart_check_query);
            $user = mysqli_fetch_assoc($result);

            if ($user) {
                mysqli_query($conn, "UPDATE cart SET quantity='$newQty', price='$newPrice' WHERE username='$username' AND product_name='$product'");
            } else {
                echo "failed";
            }
        }
    }



    header('Location: cart.php');
    mysqli_close($conn);
?>