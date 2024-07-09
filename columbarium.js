//slideshow js
let slideIndex = 1;
showSlides(slideIndex);
showPrice(slideIndex);
showDesc(slideIndex);

// Next/previous controls
function plusSlides(n) {
showSlides(slideIndex += n);
showPrice(slideIndex);
showDesc(slideIndex);
}

// Thumbnail image controls
function currentSlide(n) {
showSlides(slideIndex = n);
showPrice(slideIndex = n);
showDesc(slideIndex = n);
}

function handleChoice(val){
    switch (val){
        case "premium":
            currentSlide(3);
            break;
        case "modern":
            currentSlide(2);
            break;
        case "loving":
            currentSlide(1);
            break;
        default:
            console.log("Choose an Option");
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

function showPrice(n){
    console.log("showPrice called with index: ",n);
    let i;
    let pSlides = document.getElementsByClassName("priceSlide")
    if (n > pSlides.length){
        slideIndex=1
    }
    if (n<1){
        slideIndex = pSlides.length
    }
    for (i = 0; i < pSlides.length;i++){
        pSlides[i].style.display = "none";
    }
    pSlides[slideIndex - 1].style.display = "block";
}

function showDesc(n){
    console.log ("showDesc called with index: ",n);
    let i;
    let dSlides = document.getElementsByClassName("descSlide")
    if (n>dSlides.length){
        slideIndex=1
    }
    if(n<1){
        slideIndex = dSlides.length
    }

    for (i=0; i < dSlides.length; i++){
        dSlides[i].style.display = "none";
    }
    dSlides[slideIndex - 1].style.display = "block";
}