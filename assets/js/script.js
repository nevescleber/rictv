document.addEventListener("DOMContentLoaded", () => {
    // Initialize Swiper for mobile menu
    const mobileMenuSwiper = new Swiper(".mobile-menu-swiper", {
      slidesPerView: 1.5,
      spaceBetween: 10,
      centeredSlides: true,
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        // When window width is >= 480px
        480: {
          slidesPerView: 2.5,
          spaceBetween: 20,
        },
        // When window width is >= 640px
        640: {
          slidesPerView: 3.5,
          spaceBetween: 30,
        },
      },
    })
  
    // Mobile menu toggle
    const menuToggle = document.querySelector(".mobile-menu-toggle")
    const mobileMenu = document.querySelector(".mobile-menu")
  
    menuToggle.addEventListener("click", function () {
      mobileMenu.classList.toggle("active")
  
      // Update toggle button appearance
      const spans = this.querySelectorAll("span")
      if (mobileMenu.classList.contains("active")) {
        spans[0].style.transform = "rotate(45deg) translate(7px, 7px)"
        spans[1].style.opacity = "0"
        spans[2].style.transform = "rotate(-45deg) translate(7px, -7px)"
      } else {
        spans[0].style.transform = "none"
        spans[1].style.opacity = "1"
        spans[2].style.transform = "none"
      }
  
      // Reinitialize Swiper when menu is opened
      if (mobileMenu.classList.contains("active")) {
        mobileMenuSwiper.update()
      }
    })
  
    // Hero navigation buttons
    const prevButton = document.querySelector(".nav-button.prev")
    const nextButton = document.querySelector(".nav-button.next")
  
    // Add functionality for hero navigation (for future hero slider)
    prevButton.addEventListener("click", () => {
      // Add hero slider navigation functionality here
      console.log("Previous slide")
    })
  
    nextButton.addEventListener("click", () => {
      // Add hero slider navigation functionality here
      console.log("Next slide")
    })
  })
  