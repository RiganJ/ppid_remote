/* Theme Name:  Kasy- Responsive Landing page template
  File Description: Main JS file of the template
*/



//  Initialize navbar on page load
document.addEventListener('DOMContentLoaded', function() {
  const navbar = document.querySelector('.navbar-custom');
  if (navbar) {
    // Ensure header is visible on page load
    navbar.classList.remove('navbar-hidden');
    navbar.classList.add('navbar-visible');
  }
});

let lastScrollTop = 0;
let ticking = false;
const scrollThreshold = 8;

function updateNavbar() {
  const navbar = document.querySelector('.navbar-custom');
  if (!navbar) return;
  
  const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
  const navbarHeight = navbar.offsetHeight;
  
  // Prevent negative scrolling
  if (currentScrollTop < 0) {
    ticking = false;
    return;
  }
  
  // Add/remove sticky class for styling
  if (currentScrollTop >= 50) {
    navbar.classList.add("nav-sticky");
  } else {
    navbar.classList.remove("nav-sticky");
  }
  
  // Always show header when at top of page
  if (currentScrollTop <= navbarHeight) {
    navbar.classList.remove('navbar-hidden');
    navbar.classList.add('navbar-visible');
    lastScrollTop = currentScrollTop;
    ticking = false;
    return;
  }
  
  // Check if scrolled enough to trigger behavior
  if (Math.abs(currentScrollTop - lastScrollTop) < scrollThreshold) {
    ticking = false;
    return;
  }
  
  if (currentScrollTop > lastScrollTop && currentScrollTop > navbarHeight * 1.5) {
    // Scrolling down - hide header
    navbar.classList.add('navbar-hidden');
    navbar.classList.remove('navbar-visible');
  } else if (currentScrollTop < lastScrollTop) {
    // Scrolling up - show header
    navbar.classList.remove('navbar-hidden');
    navbar.classList.add('navbar-visible');
  }
  
  lastScrollTop = currentScrollTop;
  ticking = false;
}

function requestTick() {
  if (!ticking) {
    requestAnimationFrame(updateNavbar);
    ticking = true;
  }
}

window.addEventListener('scroll', requestTick, { passive: true });

// Swiper slider

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 30,
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



//
/********************* scroll top js ************************/
//

var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


// 
// Typed Text animation (animation)
// 

try {
  var TxtType = function (el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
  };
  TxtType.prototype.tick = function () {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];
      if (this.isDeleting) {
          this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
          this.txt = fullTxt.substring(0, this.txt.length + 1);
      }
      this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';
      var that = this;
      var delta = 200 - Math.random() * 100;
      if (this.isDeleting) { delta /= 2; }
      if (!this.isDeleting && this.txt === fullTxt) {
          delta = this.period;
          this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
          this.isDeleting = false;
          this.loopNum++;
          delta = 500;
      }
      setTimeout(function () {
          that.tick();
      }, delta);
  };
  function typewrite() {
      if (toRotate === 'undefined') {
          changeText()
      }
      else
          var elements = document.getElementsByClassName('typewrite');
      for (var i = 0; i < elements.length; i++) {
          var toRotate = elements[i].getAttribute('data-type');
          var period = elements[i].getAttribute('data-period');
          if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
          }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid transparent}";
      document.body.appendChild(css);
  };
  window.onload(typewrite());
} catch(err) {
}


// Particles removed - replaced with modern CSS background


// home3 swiper slider 

  var swiper = new Swiper(".mySwiper2", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  }
);

// Animaten js

 AOS.init();