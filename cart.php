<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="css/cart.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include "includes/navheader.php";
?>

    <div class="cart-wrapper" id="cart-wrapper">
        <div class="cart-container" id="cart-container">
            <table class="cart-table" id="cart-table">
                <thead>
                    <tr class="cart-header" id="cart-header">
                        <th>Product</th>
                        <th class="qty">QTY</th>
                        <th class = "total">Single Price</th>
                    </tr>
                    <?php
                        $user = $_SESSION['username'];
                        $subtotal = 0;
                        $i = 0;
                        $products_in_cart = "SELECT * FROM cart WHERE username = '$user'";
                    ?>
                    <?php
                        if (mysqli_query($conn, $products_in_cart)) :
                    ?>
                    <?php
                            $rows = mysqli_fetch_all(mysqli_query($conn, $products_in_cart));
                    ?>
                    <?php
                            if (!empty($rows)):
                    ?>
                    <?php
                                foreach($rows as $row):
                    ?>
                    <tr class="demo" id="demo">
                        <th>
                            <div class="cart-item">
                                <img src="<?=$row[3]?>" style="width: 100px; height: 100px">
                                <h3><?=$row[2]?></h3>
                                <input type="hidden" name="product<?=$i?>" value="<?=$row[2]?>">
                            </div>
                        </th>
                        <th>
                            <form name="delay<?=$i?>" id="delay<?=$i?>" method="post" action="updateCart.php">
                                <input type="hidden" name="product<?=$i?>" value="<?=$row[2]?>">
                                <input type="hidden" name="return_url" value="'.$current_url.'">
                                <div class="item-qty" id="item-qty<?=$i?>">
                                    <button class="price-btn minus-btn qty-count--minus<?=$i?>" id="qty-count--minus<?=$i?>" onclick="submitForm(<?=$i?>)" name="btnQty<?=$i?>" value="downQty<?=$i?>">-</button>
                                    <input class="product-qty" id="product-qty<?=$i?>" type="number" name="product-qty<?=$i?>" min="0" max="10" value="<?=$row[4]?>" readonly>
                                    <button class="price-btn plus-btn qty-count--add<?=$i?>" id="qty-count--add<?=$i?>" onclick="submitForm(<?=$i?>)" name="btnQty<?=$i?>" value="upQty<?=$i?>">+</button>
                                </div>
                                <script>
                                    (function () {
                                        const quantityContainer = document.getElementById("item-qty<?=$i?>");
                                        const inputBox = document.getElementById("product-qty<?=$i?>");

                                        quantityContainer.addEventListener("click", handleButtonClick);
                                        inputBox.addEventListener("input", handleQuantityChange);

                                        function handleButtonClick(event) {
                                            if (event.target.classList.contains("qty-count--minus<?=$i?>")) {
                                                decreaseValue();
                                                minusPrice();
                                            } else if (event.target.classList.contains("qty-count--add<?=$i?>")) {
                                                increaseValue();
                                                plusPrice();
                                            }
                                        }

                                        function decreaseValue() {
                                            let value = parseInt(inputBox.value);
                                            value = isNaN(value) ? 1 : Math.max(value - 1, 0);
                                            inputBox.value = value;
                                            handleQuantityChange();
                                        }

                                        function increaseValue() {
                                            let value = parseInt(inputBox.value);
                                            value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
                                            inputBox.value = value;
                                            handleQuantityChange();
                                        }

                                        function handleQuantityChange() {
                                            let value = parseInt(inputBox.value);
                                            value = isNaN(value) ? 1 : value;

                                            // Execute your code here based on the updated quantity value
                                            console.log("Quantity changed:", value);
                                        }

                                        function plusPrice(){
                                            const singlePrice = parseFloat(document.getElementById("hiddenSinglePrice<?=$i?>").value);
                                            const priceQty = parseFloat(document.getElementById("priceWithQty<?=$i?>").value);
                                            const qty = parseInt(document.getElementById("product-qty<?=$i?>").value);
                                            const cartTotal = parseFloat(document.getElementById("hiddenCartTotal").value);
                                            let withoutTotal = cartTotal - priceQty;
                                            let mul = singlePrice * qty;
                                            let newTotal = withoutTotal + mul;
                                            console.log(singlePrice, priceQty, qty, cartTotal, withoutTotal, newTotal);
                                            document.getElementById("priceWithQty<?=$i?>").value = mul.toFixed(2);
                                            document.getElementById("newCartTotal").innerHTML = newTotal.toFixed(2);
                                        }

                                        function minusPrice(){
                                            const singlePrice = parseFloat(document.getElementById("hiddenSinglePrice<?=$i?>").value);
                                            const priceQty = parseFloat(document.getElementById("priceWithQty<?=$i?>").value);
                                            const qty = parseInt(document.getElementById("product-qty<?=$i?>").value);
                                            const cartTotal = parseFloat(document.getElementById("hiddenCartTotal").value);
                                            let withoutTotal = cartTotal - priceQty;
                                            let mul = singlePrice * qty;
                                            let newTotal = withoutTotal + mul;
                                            console.log(newTotal);
                                            document.getElementById("priceWithQty<?=$i?>").value = mul.toFixed(2);
                                            document.getElementById("newCartTotal").innerHTML = newTotal.toFixed(2);
                                        }
                                    })();
                                </script>
                                <input type="hidden" id="hiddenSinglePrice<?=$i?>" value="<?=$row[7]?>">
                                <input type="hidden" name="priceWithQty<?=$i?>" id="priceWithQty<?=$i?>" value="<?=$row[6]?>">
                            </form>
                            <script>
                                function submitForm(num){
                                    let base = "delay";
                                    var id = base.concat(num);
                                    var form = document.getElementById(id);
                                    form.submit();
                                }
                            </script>
                        </th>
                        <th>
                            <div class="ttl-price" id="ttl-price">
                                <h2 class="price" id="price<?=$i?>">
                                    <?=$row[7]?>
                                </h2>
                            </div>
                        </th>
                    </tr>

                    <?php
                        $subtotal += $row[6];
                        $i = $i + 1;
                    ?>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <?php endif; ?>
                </thead>
                <tbody></tbody>
            </table>
                <?php
                $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
                ?>
            <div class="additional-note" id="additional-note">
                <label for="note" class="note-hd" id="note-had">
                    ADD A NOTE
                </label>
                <textarea id="note" name="note"></textarea>
            </div>
        </div>
        <div class="cart-summary-container" id="cart-summary-container">
            <div class="summary" id="summary">
                <div class="price-tags" id="price-tags">
                    <div class="flex-shrink-1">
                        <p class="cart-total">
                            CART TOTAL
                        </p>
                    </div>
                    <div class="flex-shrink-0">
                        <p class="cart-price" id="cart-price">
                            <span>RM</span>
                            <span class="cartPriceTotal" id="newCartTotal"><?=$subtotal?></span>
                            <input type="hidden" id="hiddenCartTotal" value="<?=$subtotal?>">
                        </p>
                    </div>
                </div>
                <p class="terms">
                    Additional charges are included at checkout.
                </p>
            </div>
            <div class="pay-btn-wrapper" id="pay-btn-wrapper">
                <button type="button" onclick="location.href='checkout.php'" class="pay-btn">CHECKOUT</button>
            </div>
        </div>
    </div>
<?php
include "includes/footer.php";
?>
</body>
</html>