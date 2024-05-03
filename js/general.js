var $ = jQuery;

function handleIntersection(entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      // Call your desired function here
      console.log("Target element is in view!");
      // For example, you could add a class to the target element
      entry.target.classList.add("in-view");
      // Stop observing once the element is in view (if desired)
      observer.unobserve(entry.target);
    }
  });
}

// Create a new IntersectionObserver
const observer = new IntersectionObserver(handleIntersection, {
  root: null, // Use the viewport as the root
  rootMargin: "0px", // No margin
  threshold: 0.5, // 50% of the target element visible
});

$(document).ready(function () { 
    // Select the target element
    // const target = document.getElementById("stats");

    // // Start observing the target element
    // observer.observe(target);

    var isHomeSlider = $('.slider-home');

    if (isHomeSlider !== undefined && isHomeSlider.length > 0) { 
    }
    var homeSwiper = new Swiper(".homeSwiper", {
      autoplay: {
        delay: 4000,
      },
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
});