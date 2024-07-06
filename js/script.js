



// playing youtube short
function playVideo(element) {
  // Get the video URL from the data-video-link attribute
  var videoUrl = $(element).attr('data-video-link');



  // Set the src of the iframe inside the modal
  $('#youtube-video-modal').find('iframe').attr('src', videoUrl);

  // Show the modal
  $('#youtube-video-modal').modal('show');
}

// Make sure to stop the video when the modal is closed
$('#youtube-video-modal').on('hidden.bs.modal', function (e) {
  $('#youtube-video-modal').find('iframe').attr('src', '');
});



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
// window.addEventListener("scroll", (e) => {
//     let lineTopBound = document
//         .querySelector(".line")
//         .getBoundingClientRect().top;
//     let lineBottomBound = document
//         .querySelector(".line")
//         .getBoundingClientRect().bottom;

//     let PostiveInt = Math.abs(lineTopBound);
//     let TotalHeight = document.querySelector(".line").offsetHeight;
//     let Percentage = (PostiveInt / TotalHeight) * 100;

//     if (lineBottomBound > 160) {
//         document.querySelector(".line_inner").style.height = `${Percentage + 2
//             }%`;
//     }
// });




window.addEventListener("scroll", () => {
  const line = document.querySelector(".line");
  const lineInner = document.querySelector(".line_inner");

  // Get the bounding rectangle of the .line element
  const lineRect = line.getBoundingClientRect();

  // Calculate the height of the .line element relative to the viewport
  const viewportHeight = window.innerHeight;

  // Calculate how much of the .line is in view
  const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

  // Calculate the distance from the top of the viewport to the top of the .line element
  const lineTopOffset = lineRect.top + scrollTop;

  // Calculate the amount scrolled within the .line element
  const scrolledWithinLine = scrollTop - lineTopOffset + viewportHeight;

  // Calculate the scroll percentage of the .line element
  const lineHeight = line.offsetHeight;
  const scrollPercentage = Math.min((scrolledWithinLine / lineHeight) * 100, 125);

  // Update the height of the .line_inner
  lineInner.style.height = `${scrollPercentage - 25}%`;
});


const myCarouselElement = document.querySelector('#carouselExampleIndicators')

const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 2000,
  touch: false,
  pause: false
})
