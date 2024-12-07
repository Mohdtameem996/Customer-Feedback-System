let slideIndex = 0;
showSlides();

function showSlides() {
    let slides = document.querySelectorAll(".carousel-item");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    slides[slideIndex-1].style.display = "block";  
    setTimeout(showSlides, 8000); // Change image every 5 seconds
}

function plusSlides(n) {
    slideIndex += n - 1;
    showSlides();
}