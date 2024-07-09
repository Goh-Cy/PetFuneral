<!DOCTYPE HTML>
<html>
    <head>
        <title>Columbarium</title>
        <link rel="stylesheet" href="css/columbarium.css">
    </head>
    <body>
        <?php include ('includes/navheader.php')?>
        <div class="col_wrapper">
            <div class="slide_img">
                <div class="slideshow-container">
                    <div class="mySlides fadeToNext">
                        <img src="img/col/loving.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fadeToNext">
                        <img src="img/col/modern.jpg" style="width:100%">
                    </div>
                    <div class="mySlides fadeToNext">
                        <img src="img/col/premium.jpg" style="width:100%">
                    </div>
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                </div>
                <br>
            </div>
            <div class="col_summary">
                <h1 class="product-name">Columbaria</h1>
                <p class="summary-desc">A place to house your pets. A forever home for their afterlife, and acting as a memorial place for pawrents. You may book an appointment with us here.</p>
                <div class="reserve-price">
                    <div class="priceSlide">
                        <p class="price-currency">From RM</p>
                        <p class="price">300</p>
                    </div> 
                    <div class="priceSlide">
                        <p class="price-currency">From RM</p>
                        <p class="price">800</p>
                    </div>
                    <div class="priceSlide">
                        <p class="price-currency">From RM</p>
                        <p class="price">1200</p>
                    </div>
                </div>
                <form class="cart-variations" method="post" action="post-col.php">
                    <input type="hidden" id="product-name" name="product-name" value="Columbarium">
                    <input type="hidden" id="price" name="price" value="">
                    <input type="hidden" id="individual-price" name="singlePrice" value="">
                    <input type="hidden" id="product-img-link" name="product-img-link" value="img/col/loving.jpg">
                    <table class="variations" role="presentation" cellspacing="0">
                        <tbody>
                            <tr>
                                <th class="label">
                                    Tier
                                </th>
                                <td class="value">
                                    <select id="type" class="type" name="type" onchange="handleChoice(this.value)">
                                        <option value="">Choose an option</option>
                                        <option value="premium" class="attached enabled">
                                            Premium
                                        </option>
                                        <option value="modern" class="attached enabled">
                                            Modern
                                        </option>
                                        <option value="loving" class="attached enabled">
                                            Loving
                                        </option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="quantity add-to-cart">
                        <div class="quantity">
                            <div class="ATC">
                                <button type="submit" class="add-to-cart-btn" name="btnSubmit">Reserve</button>
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
                <div class="descSlide">
                    <p class="text-1">
                        Allow pets to receive warm sunlight.
                    </p>
                    <p class="text-2">
                        Outdoor Columbarium. (Pets loves outdoors, remember when you said "go for a walk"?)
                    </p>
                    <p class="text-3">
                        Homey Feel, making them feel like they never left home.
                    </p>
                </div>
                <div class="descSlide">
                    <p class="text-1">
                        Modern Minimalist Design.
                    </p>
                    <p class="text-2">
                        Indoor Columbarium.
                    </p>
                    <p class="text-3">
                        Purfect place for pets to rest.
                    </p>
                </div>
                <div class="descSlide">
                    <p class="text-1">
                        A Luxurious Design.
                    </p>
                    <p class="text-2">
                        Indoor Columbarium.
                    </p>
                    <p class="text-3">
                        Includes seats for you, so that it will feel like you are spending time with them again.
                    </p>
                </div>
            </div>
        </div>
        <script src="columbarium.js"></script>
    </body>
    
</html>