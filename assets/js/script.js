// faq

// JavaScript for toggling FAQ answers and animating the icon
// document.querySelectorAll(".faq-section .question").forEach((question) => {
//   const icon = question.querySelector(".icon");

//   icon.addEventListener("click", () => {
//     question.classList.toggle("open");
//   });
// });

// swipper for team
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new swiper(".init-swiper", {
    loop: true,
    speed: 600,
    autoplay: {
      delay: 5000,
    },
    slidesPerView: "auto",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      480: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      640: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      992: {
        slidesPerView: 6,
        spaceBetween: 50,
      },
    },
  });
});

// swipper for testimonials
// const swiper = new swiper(".init-swiper", {
//   loop: true,
//   speed: 600,
//   autoplay: {
//     delay: 5000,
//   },
//   slidesPerView: "auto",
//   pagination: {
//     el: ".swiper-pagination",
//     type: "bullets",
//     clickable: true,
//   },
//   breakpoints: {
//     320: {
//       slidesPerView: 1,
//       spaceBetween: 20,
//     },
//     768: {
//       slidesPerView: 2,
//       spaceBetween: 30,
//     },
//     1024: {
//       slidesPerView: 3,
//       spaceBetween: 40,
//     },
//   },
// });

// AOS
AOS.init({
  duration: 1000,
  easing: "ease-in-out",
  once: true,
  mirror: false,
});

// for team swiper
var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 300,
    modifier: 1,
    slideShadows: false,
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
});

