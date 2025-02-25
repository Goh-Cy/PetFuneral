<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="css/checkout.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include ("connection.php");
session_start();
?>
<div class="wrapper">
    <div class="checkout-hd">
        <div class="left-hd">
            <a class="return" href="#">
                <img src="img/return.png" style="width: 30px; height: 30px">
            </a>
        </div>
        <div class="splitter"></div>
        <div class="right-hd">
            <span class="checkout-wd">
                Check Out
            </span>
        </div>
    </div>
    <div class="container">
        <div class="left-wrapper">
            <div class="cart-container" id="cart-container">
                <table class="cart-table" id="cart-table">
                    <thead>
                    <tr class="cart-header" id="cart-header">
                        <th>Product</th>
                        <th class="qty">QTY</th>
                        <th class = "total">Total</th>
                    </tr>
                    <?php
                    $user = $_SESSION['username'];
                    $products_in_cart = "SELECT * FROM cart WHERE username = '$user'";
                    ?>
                    <?php
                    if (mysqli_query($conn, $products_in_cart)) :
                        ?>
                        <?php
                        $rows = mysqli_fetch_assoc(mysqli_query($conn, $products_in_cart));
                        ?>
                        <?php
                        if (is_array($rows) && !empty($rows)):
                            ?>
                            <tr class="demo" id="demo">
                                <th>
                                    <div class="cart-item">
                                        <img src="https://petmemorial.com.my/wp-content/uploads/2021/12/Basic-Express-Package.jpg">
                                        <h3><?=$rows['product_name']?></h3>
                                    </div>
                                </th>
                                <th>
                                    <div class="item-qty">
                                        <h2 class="price" id="price">
                                            <?=$rows['quantity']?>
                                        </h2>
                                    </div>
                                </th>
                                <th>
                                    <div class="ttl-price" id="ttl-price">
                                        <h2 class="price" id="price">
                                            <?=$rows['price']?>
                                        </h2>
                                    </div>
                                </th>
                            </tr>
                            <?php
                            $count = 0;
                            $count += $rows['quantity'];
                            $subtotal = 0;
                            $subtotal += $rows['price']; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    </thead>
                    <tbody></tbody>
                </table>
                <div class="payment-method">
                    <h3 class="payment-method-title">
                        Payment Method
                    </h3>
                    <div class="methods position-relatives">
                        <div class="FPX boxed position-relative">
                            <input type="checkbox" name="FPX" id="Check1" onclick="selectOnlyThis(this.id)">
                            <span class="montserrat-title position-absolute float">
                                FPX Online Banking
                            </span>
                            <span class="montserrat-etc position-absolute float align">
                                Public Bank, Bank Islam, Maybank, CIMB, RHB, Ambank
                            </span>
                        </div>
                        <div class="QR boxed position-relative">
                            <input type="checkbox" name="qr" id="Check2" onclick="selectOnlyThis(this.id)">
                            <span class="montserrat-title position-absolute float">
                                QR Code / DuitNow QR
                            </span>
                            <span class="montserrat-etc position-absolute float align">
                                TNG, DuitNow, Alipay, Wechat, GrabPay
                            </span>
                        </div>
                        <div class="CreditCard boxed position-relative">
                            <input type="checkbox" name="creditCard" id="Check3" onclick="selectOnlyThis(this.id)">
                            <span class="montserrat-title position-absolute float">
                                Credit Card
                            </span>
                            <span class="montserrat-etc position-absolute float align">
                                VISA, Mastercard
                            </span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="right-wrapper">
            <div class="bill">
                <div class="order-summary" id="order-summary">
                    <div class="summary">
                        <p class="summary-hd montserrat-smhd">
                            Order Summary
                        </p>
                        <div class="details">
                            <div class="details1 justify-content">
                                <p class="items-count" id="items-count">
                                    <?=$count?>
                                    <?php if($count > 1):?>
                                        items
                                    <?php else:?>
                                        item
                                    <?php endif;?>
                                </p>
                                <p class="items-count" id="items-count-price">
                                    <?=$subtotal?>
                                </p>
                            </div>
                            <div class="details2 justify-content">
                                <p class="tax" id="tax">
                                    Sales Tax
                                </p>
                                <p class="tax" id="tax-price">
                                    <?=$subtotal * 0.18?>
                                </p>
                            </div>
                            <div class="details3 justify-content">
                                <p class="delivery" id="delivery">
                                    Delivery
                                </p>
                                <p class="delivery" id="delivery-price">
                                    Free
                                </p>
                            </div>
                            <div class="details4 justify-content">
                                <p class="discount" id="discount">

                                </p>
                                <p class="discount" id="discount-price">

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="summary-total justify-content">
                        <p class="order-total" id="order-total">
                            Total
                        </p>
                        <p class="order-total" id="order-total-price">
                            RM<?=$subtotal + ($subtotal * 0.18)?>
                        </p>
                    </div>
                </div>
                <form method="post" name="pay" action="post-checkout.php">
                    <input type="hidden" name="subtotal" id="subtotal" value="<?=$subtotal + ($subtotal * 0.18)?>">
                    <div class="pay-btn-wrapper" id="pay-btn-wrapper">
                        <button type="submit" class="pay-btn" name="btnSubmit">PAY</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function selectOnlyThis(id) {
        for (var i = 1;i <= 3; i++)
        {
            document.getElementById("Check" + i).checked = false;
        }
        document.getElementById(id).checked = true;
    }
</script>
</body>