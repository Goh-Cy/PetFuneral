<!DOCTYPE HTML>
<html>
<head>
	<title>PetFuneral</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
	<?php include('includes/navheader.php'); ?>
	<!-- here is the slide show, nak chg picture come here -->
	<div class="slideshow-container">
		<div class="mySlides fadeToNext">
			<!-- change image at the line below -->
			<img src="img/home/pet1.jpg">
			<!-- you may chg the text at the line below -->
			<div class="text">
				<h4>Pet Funerals</h4>
				<em>Their Last Resting Place</em>
			</div>
		</div>
		<!-- same goes for the rest of the slideshow below -->
		<div class="mySlides fadeToNext">
			<img src="img/home/pet2.jpg">
			<div class="text">
				<h4>Custom Made Funeral Services</h4>
				<em>Hand-Picked For You</em>
			</div>
		</div>

		<div class="mySlides fadeToNext">
			<img src="img/home/pet3.jpg">
			<div class="text">
				<h4>We Are Here To Help</h4>
				<em>Consultation Services Available</em>
			</div>
		</div>
		<a class="prev" onclick="plusSlides(-1)"><</a>
		<a class="next" onclick="plusSlides(1)">></a>
	</div>
	<!-- this is the dot below the slide show ignore plz -->
	<div style="text-align:center">
		<span class="dot"></span>
		<span class="dot"></span>
		<span class="dot"></span>
	</div>
	<!-- the container for the first left-right elements -->
	<div class="container">
		<div class="service_home">
			<h4>Custom Services Tailored to Your Needs</h4>
			<h2>How Would You Like to Say <b>Goodbye to Your Beloved Pet</b></h2>
			<p>PetFuneral offers some of the most affordable packages with some of the best experiences for you to choose from. Click the button below to find out more.</p>

			<a class="link" href="./products">Find Out More</a>
		</div>

		<div class="pet-image pet_sleep">
			<img src="img/home/pet_sleep.jpg">
		</div>
	</div>

	<!-- the container for the 2nd left-right elements -->
	<div class="container">
		<div class="pet-image pet-memo">
			<img src="img/home/pet_memorial.jpg">
		</div>

		<div class="petm-text">
			<h4>Pet Memorial Gallery</h4>
			<h2>Memories of Your Beloved Pets</h2>
			<p>A gallery consisting the memories of past paw friends</p>

			<a class="link" href="gallery.php">View Memorial</a>
		</div>
	</div>
	<!--this javascript is exclusively for the slide show only  -->
	<script src="slideShow.js"></script>
	<?php include('includes/footer.php'); ?>
</body>
</html>