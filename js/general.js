var $ = jQuery;

const callback = function (entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      updateCount(entry.target);
      observer.unobserve(entry.target);
    }
  });
};

const observer = new IntersectionObserver(callback, {
  threshold: 0.1,
});

const updateCount = (el) => {
  var $element = $(el);
  const target = +$element.data("number");
  var count = +$element.text();

  // Lower inc to slow and higher to slow
  const inc = target / 100;

  if (count < target) {
    // Add inc to count and output in counter
    $element.text(Math.ceil(count + inc));
    // Call function every ms
    setTimeout(function () {
      updateCount($element);
    }, 40);
  } else {
    $element.text(target);
  }
};

$(document).ready(function () {
  
  $(".counter").each(function () {
    observer.observe(this);
  });

  var isHomeSlider = $(".slider-home");

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
