//slideshow js
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

function handleChoice(val){
    switch(val){
        case "gold-paw-front-lid":
            currentSlide(1);
            break;
        case "gold-paw-around":
            currentSlide(2);
            break;
        case "red":
            currentSlide(3);
            break;
        case "white":
            currentSlide(4);
            break;
        case "blue":
            currentSlide(5);
            break;
        default:
            console.log("Select an urn");
    }
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
}
//end of slideshow js

//update price
function updatePrice() {
    const priceElement = document.querySelector(".price");
    const quantity = parseInt(document.querySelector(".product-qty").value);
    let totalPrice = 0;
    let singlePrice = 110;

    totalPrice = singlePrice * quantity;

    priceElement.innerHTML = totalPrice.toFixed(2);
    document.getElementById("price").value = totalPrice.toFixed(2);
    document.getElementById("individual-price").value = singlePrice.toFixed(2);

}