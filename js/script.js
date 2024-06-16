

 // playing youtube short
 function playVideo(element) {
    var postImgDiv = element.parentElement;
    var video = postImgDiv.querySelector('.youtube-video');
    video.style.display = 'block';
    element.style.display = 'none';
    video.src += "&autoplay=1";
}


// footer lottie animation 
var animationContainer = document.querySelector('.lotee-animation-container');

var animation = lottie.loadAnimation({
    container: animationContainer,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie-json/Samyama-Footer.json'
});

// owl-carausal
$(document).ready(function () {
    $("#news-slider").owlCarousel({
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [980, 2],
        itemsMobile: [600, 1],
        navigation: true,
        navigationText: ["", ""],
        pagination: true,
        autoPlay: false
    });
});

// flight-scroll animation
window.addEventListener("scroll", (e) => {
    let lineTopBound = document
        .querySelector(".line")
        .getBoundingClientRect().top;
    let lineBottomBound = document
        .querySelector(".line")
        .getBoundingClientRect().bottom;

    let PostiveInt = Math.abs(lineTopBound);
    let TotalHeight = document.querySelector(".line").offsetHeight;
    let Percentage = (PostiveInt / TotalHeight) * 130;

    if (lineBottomBound > 160) {
        document.querySelector(".line_inner").style.height = `${Percentage + 2
            }%`;
    }
});