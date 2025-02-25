<!DOCTYPE HTML>
<html>
<head>
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="" async defer></script>
</head>
<body>
<?php include('includes/navheader.php'); ?>
<div class="about_container">
    <div class="about_img_container">
        <img src="img/home/pet_about.jpg">
        <div class="about_text">
            <h4>PetFuneral Memorial Services</h4>
            <em>Providing best services for your pets</em>
        </div>
    </div>

    <div class="about_us_container">
        <div class="about_us_content">
            <h2>Why Choose Us?</h2>
            <ul>
                <li><h4>Dedicated to honoring the passing of beloved pets.</h4></li>
                <li><h4>Thoughtful and Personalized Services</h4></li>
                <li><h4>A Place of Comfort and Healing</h4></li>
            </ul>
            <h2>Pets are an important part of our families</h2>
            <p>Pets are gifts from the heavens above that brings joy and prosper to a family. Giving an experience of the best "Hello"; Sadly they also give the worst "GoodByes".<br><br>Our mission is to help family members with the passing of their fur angels, making their worst "GoodByes" a little less grim.</p>
        </div>
        <div class="about_us_content">
            <img src="img/logo.png" alt="logo">
            <h4>In PetsFuneral, we understand the deep bond you share with your beloved pets. Our pet memorial service is a haven for honoring and preserving the everlasting love you have for them.</h4>
            <img src="img/home/pet_affection.jpg" class="pet-image">
        </div>
    </div>

    <div class="map_container">
        <div id="map" class="google_map"></div>
        <div class="map_info">
            <h3>Get in touch</h3>
            <div>
                <i class="fas fa-phone-alt"></i>
                <span class="phone">+6012-345 6789</span>
                <span></span>
                <span class="phone">/ +6016-234 5678</span>
            </div>
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <span class="location">10, Jln. Dayang 11/8, Bdr. Mahkota Cheras, 43200 Cheras, Selangor</span>
            </div>
            <div>
                <i class="fas fas fa-clock"></i>
                <span class="clock">Office hour (Mon-Sun 7:00AM - 6:00PM)</span>
            </div>
        </div>
    </div>
</div>
<?php include('includes/footer.php'); ?>
<script>
    google.maps.event.addDomListener(window,'load',initMap);
    function initMap(){
        // specify coordinates
        var myLatLng = {lat: 3.054607, lng: 101.790798};

        // create new map object
        var map = new google.maps.Map(document.getElementById('map'),{center: myLatLng, zoom: 16});

        // Add Marker to the map
        var marker = new google.maps.Marker({
            position: myLatLng,
            map:map,
            title:'PetsFuneral'
        });
    }
</script>
</body>
</html>
