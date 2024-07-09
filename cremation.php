<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Cremation</title>
    <!--    <link href="css/products.css" rel="stylesheet" type="text/css">-->
    <link href="css/cremation.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    include ('includes/navheader.php');
    ?>
    <div class="product-wrapper">
        <div class="img-slide">
            <div class="slideshow-container">
                <div class="mySlides fadeToNext">
                    <img src="img/cremation1.jpg" style="width:100% ">
                </div>
                <div class="mySlides fadeToNext">
                    <img src="img/cremation2.jpg" style="width:100%">
                </div>
                <div class="mySlides fadeToNext">
                    <img src="img/cremation3.jpg" style="width:100%">
                </div>
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
        </div>
        <div class="package-summary">
            <h1 class="product-name">
                Cremation Package
            </h1>
            <p class="summary-desc">Because we understand that even in their passing, your pets deserve a thoughtful
                goodbye. We allow you to decide what to do about the aftermath, such as pet cremation (mass/individual
                cremation) and pet funeral.</p>
            <div class="price-div">
                <p class="price-currency">
                    RM
                </p>
                <p class="price">
                    250-1000
                </p>
            </div>
            <form class="cart-variations" method="post" action="post-cremation.php">
                <input type="hidden" id="product-name" name="product-name" value="Cremation">
                <input type="hidden" id="price" name="price" value="">
                <input type="hidden" id="individual-price" name="singlePrice" value="">
                <input type="hidden" id="product-img-link" name="product-img-link" value="img/cremation1.jpg">
                <table class="variations" role="presentation" cellspacing="0">
                    <tbody>
                        <tr>
                            <th class="label">
                                Package
                            </th>
                            <td class="value">
                                <select id="cremation-type" class="cremation-type" name="cremation-type" onchange="updatePrice()">
                                    <option value>Choose an option</option>
                                    <option value="Individual" class="attached enabled">
                                        Individual cremation
                                    </option>
                                    <option value="Mass" class="attached enabled">
                                        Mass cremation
                                    </option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="variations" role="presentation" cellspacing="0">
                    <tbody>
                        <th class="label">
                            Weight
                        </th>
                        <td class="value">
                            <select id="weight" class="weight" name="weight" onchange="updatePrice()">
                                <option value>Choose an option</option>
                                <option value="0.1kg - 2.9kg" class="attached enabled">
                                    0.1kg - 2.9kg
                                </option>
                                <option value="3.0kg - 9.9kg" class="attached enabled">
                                    3.0kg - 9.9kg
                                </option>
                                <option value="10.0kg - 19.9kg" class="attached enabled">
                                    10.0kg - 19.9kg
                                </option>
                                <option value="20.0kg - 29.9kg" class="attached enabled">
                                    20.0kg - 29.9kg
                                </option>
                            </select>
                        </td>
                        </tr>
                    </tbody>
                </table>
                <div class="quantity add-to-cart">
                    <div class="quantity">
                        <div class="qty-input img-slide">
                            <button class="qty-count qty-count--minus" data-action="minus" type="button" >-</button>
                            <input class="product-qty" type="number" name="product-qty" onchange="updatePrice()" min="0" max="10" value="1">
                            <button class="qty-count qty-count--add" data-action="add" type="button">+</button>
                        </div>
                        <label class="quantity-label"></label>
                        <div class="ATC">
                            <button type="submit" class="add-to-cart-btn" name="btnSubmit">Add to cart</button>
                        </div>
                    </div>
                    <script>
                        (function () {
                            const quantityContainer = document.querySelector(".qty-input");
                            const minusBtn = quantityContainer.querySelector(".qty-count--minus");
                            const plusBtn = quantityContainer.querySelector(".qty-count--add");
                            const inputBox = quantityContainer.querySelector(".product-qty");

                            updateButtonStates();

                            quantityContainer.addEventListener("click", handleButtonClick);
                            inputBox.addEventListener("input", handleQuantityChange);

                            function updateButtonStates() {
                                const value = parseInt(inputBox.value);
                                minusBtn.disabled = value <= 1;
                                plusBtn.disabled = value >= parseInt(inputBox.max);
                            }

                            function handleButtonClick(event) {
                                if (event.target.classList.contains("qty-count--minus")) {
                                    decreaseValue();
                                    updatePrice();
                                } else if (event.target.classList.contains("qty-count--add")) {
                                    increaseValue();
                                    updatePrice();
                                }
                            }

                            function decreaseValue() {
                                let value = parseInt(inputBox.value);
                                value = isNaN(value) ? 1 : Math.max(value - 1, 1);
                                inputBox.value = value;
                                updateButtonStates();
                                handleQuantityChange();
                            }

                            function increaseValue() {
                                let value = parseInt(inputBox.value);
                                value = isNaN(value) ? 1 : Math.min(value + 1, parseInt(inputBox.max));
                                inputBox.value = value;
                                updateButtonStates();
                                handleQuantityChange();
                            }

                            function handleQuantityChange() {
                                let value = parseInt(inputBox.value);
                                value = isNaN(value) ? 1 : value;

                                // Execute your code here based on the updated quantity value
                                console.log("Quantity changed:", value);
                            }
                        })();
                    </script>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    <div class="description">
        <ul class="desc-tabs" role="tablist">
            <li class="desc-tab" role="tab" aira-controls="tab-description">
                <a href="#tab-description">Description</a>
            </li>
        </ul>
        <div class="desc-text">
            <p class="text-1">
                We provide individual/mass cremation. Charges based on per pet carcass.
            </p>
            <p class="text-2" style = "font-weight: bold";>
                Note: We may reject carcasses in bad condition (For example, carcasses mroe than 2 days old, with a bad smell, rotting, and the likewise).
            </p>
            <p class="text-3" style = "font-weight: bold";>
                &emsp;&emsp;&emsp;If such cases occur ,we will charge RM60 as transport fees.
            </p>
        </div>
    </div>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

        function updatePrice() {
            const priceElement = document.querySelector(".price");
            const cremationType = document.getElementById("cremation-type");
            const weight = document.getElementById("weight");
            const quantity = parseInt(document.querySelector(".product-qty").value);
            let totalPrice = 0;
            let singlePrice = 0;

            if (cremationType.value === "Individual") {
                switch (weight.value) {
                    case "0.1kg - 2.9kg":
                        totalPrice = 550 * quantity;
                        singlePrice = 550;
                        break;
                    case "3.0kg - 9.9kg":
                        totalPrice = 650 * quantity;
                        singlePrice = 650;
                        break;
                    case "10.0kg - 19.9kg":
                        totalPrice = 800 * quantity;
                        singlePrice = 800;
                        break;
                    case "20.0kg - 29.9kg":
                        totalPrice = 1000 * quantity;
                        singlePrice = 1000;
                        break;
                }
            } else if (cremationType.value === "Mass") {
                switch (weight.value) {
                    case "0.1kg - 2.9kg":
                        totalPrice = 250 * quantity;
                        singlePrice = 250;
                        break;
                    case "3.0kg - 9.9kg":
                        totalPrice = 350 * quantity;
                        singlePrice = 350;
                        break;
                    case "10.0kg - 19.9kg":
                        totalPrice = 400 * quantity;
                        singlePrice = 400;
                        break;
                    case "20.0kg - 29.9kg":
                        singlePrice = 500;
                        totalPrice = 500 * quantity;
                        break;
                }
            }

            priceElement.innerHTML = totalPrice.toFixed(2);
            document.getElementById("price").value = totalPrice.toFixed(2);
            document.getElementById("individual-price").value = singlePrice.toFixed(2);
        }



    </script>
    <?php
    include ("includes/footer.php");
    ?>
</body>

</html>
