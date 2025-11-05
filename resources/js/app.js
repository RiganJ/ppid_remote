/* Theme Name:  Kasy- Responsive Landing page template
  File Description: Main JS file of the template
*/

// Feature Heading First Letter Styling - Responsive
function initFeatureHeadingFirstLetter() {
  const featureHeadings = document.querySelectorAll('.feature-heading');
  
  featureHeadings.forEach(heading => {
    const text = heading.textContent.trim();
    if (text.length > 0) {
      const firstLetter = text.charAt(0);
      const restText = text.slice(1);
      
      // Check if already processed to avoid double processing
      if (!heading.querySelector('.first-letter')) {
        heading.innerHTML = `<span class="first-letter">${firstLetter}</span>${restText}`;
      }
    }
  });
}

// Responsive handler for first letter styling
function handleResponsiveFirstLetter() {
  const firstLetters = document.querySelectorAll('.feature-heading .first-letter');
  const isMobile = window.innerWidth <= 768;
  const isTablet = window.innerWidth > 768 && window.innerWidth <= 1024;
  
  firstLetters.forEach(letter => {
    // Remove existing responsive classes
    letter.classList.remove('mobile-style', 'tablet-style', 'desktop-style');
    
    if (isMobile) {
      letter.classList.add('mobile-style');
    } else if (isTablet) {
      letter.classList.add('tablet-style');
    } else {
      letter.classList.add('desktop-style');
    }
  });
}

// Initialize on DOM load
document.addEventListener('DOMContentLoaded', function() {
  initFeatureHeadingFirstLetter();
  handleResponsiveFirstLetter();
});

// Handle window resize
window.addEventListener('resize', function() {
  handleResponsiveFirstLetter();
});

//  Window scroll sticky class add
function windowScroll() {
  const navbar = document.getElementById("navbar");
  if (
      document.body.scrollTop >= 50 ||
      document.documentElement.scrollTop >= 50
  ) {
      navbar.classList.add("nav-sticky");
  } else {
      navbar.classList.remove("nav-sticky");
  }
}

window.addEventListener('scroll', (ev) => {
  ev.preventDefault();
  windowScroll();
})

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

// ===== NEWS SWITCHING FUNCTIONALITY =====

// Comprehensive News Data Structure
const newsData = {
    1: {
        id: 1,
        title: "Implementasi Sistem Informasi PPID Terpadu untuk Meningkatkan Transparansi Publik",
        excerpt: "Sistem informasi PPID terpadu telah berhasil diimplementasikan untuk memberikan akses informasi publik yang lebih mudah, cepat, dan transparan bagi seluruh masyarakat.",
        fullContent: "Implementasi sistem informasi PPID terpadu merupakan langkah strategis dalam meningkatkan kualitas pelayanan informasi publik. Sistem ini mengintegrasikan berbagai platform dan database untuk memberikan akses yang seamless kepada masyarakat. Fitur-fitur unggulan meliputi pencarian informasi yang lebih akurat, tracking status permohonan real-time, dan dashboard analytics untuk monitoring kinerja PPID. Dengan teknologi cloud computing dan keamanan berlapis, sistem ini mampu melayani ribuan pengguna secara bersamaan dengan response time yang optimal.",
        image: "https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80",
        date: "15 Desember 2024",
        author: "Admin PPID",
        views: 1245,
        category: "Transparansi"
    },
    2: {
        id: 2,
        title: "Peluncuran Portal PPID Online untuk Kemudahan Akses Informasi",
        excerpt: "Portal PPID online resmi diluncurkan dengan fitur-fitur canggih untuk memudahkan masyarakat dalam mengakses berbagai informasi publik secara digital.",
        fullContent: "Portal PPID online hadir sebagai solusi digital untuk memudahkan akses informasi publik. Platform ini dilengkapi dengan interface yang user-friendly, sistem pencarian yang powerful, dan fitur notifikasi real-time. Masyarakat dapat mengajukan permohonan informasi, melacak status pengajuan, dan mengunduh dokumen publik dengan mudah. Portal ini juga terintegrasi dengan sistem pembayaran digital untuk biaya administrasi dan menyediakan layanan konsultasi online dengan petugas PPID.",
        image: "https://images.unsplash.com/photo-1586339949916-3e9457bef6d3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "14 Desember 2024",
        author: "Tim Pengembang PPID",
        views: 892,
        category: "Teknologi"
    },
    3: {
        id: 3,
        title: "Regulasi Baru Tentang Keterbukaan Informasi Publik Tahun 2024",
        excerpt: "Pemerintah mengeluarkan regulasi terbaru yang memperkuat komitmen terhadap keterbukaan informasi publik dengan standar pelayanan yang lebih baik dan responsif terhadap kebutuhan masyarakat.",
        fullContent: "Regulasi baru tentang keterbukaan informasi publik tahun 2024 membawa perubahan signifikan dalam tata kelola informasi pemerintahan. Regulasi ini menekankan pada peningkatan kualitas layanan, pengurangan birokrasi, dan percepatan proses pelayanan informasi. Standar baru yang ditetapkan mencakup batas waktu maksimal pelayanan, kriteria informasi yang dapat diakses publik, dan mekanisme pengaduan yang lebih efektif. Implementasi regulasi ini diharapkan dapat meningkatkan kepercayaan masyarakat terhadap pemerintah.",
        image: "https://images.unsplash.com/photo-1450101499163-c8848c66ca85?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "13 Desember 2024",
        author: "Divisi Hukum PPID",
        views: 756,
        category: "Regulasi"
    },
    4: {
        id: 4,
        title: "Workshop Literasi Informasi Publik untuk Masyarakat",
        excerpt: "Program edukasi komprehensif untuk meningkatkan pemahaman masyarakat tentang hak akses informasi dan cara menggunakan layanan PPID secara optimal.",
        fullContent: "Workshop Literasi Informasi Publik merupakan program edukasi yang dirancang khusus untuk meningkatkan pemahaman masyarakat tentang hak-hak mereka dalam mengakses informasi publik. Program ini mencakup pelatihan tentang cara mengajukan permohonan informasi, memahami jenis-jenis informasi yang dapat diakses, dan memanfaatkan teknologi digital untuk akses informasi. Workshop ini juga memberikan pemahaman tentang pentingnya transparansi dalam pemerintahan dan bagaimana masyarakat dapat berpartisipasi aktif dalam pengawasan kebijakan publik.",
        image: "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "12 Desember 2024",
        author: "Tim Edukasi PPID",
        views: 634,
        category: "Edukasi"
    },
    5: {
        id: 5,
        title: "Pemeliharaan Sistem PPID Terjadwal Minggu Depan",
        excerpt: "Sistem PPID akan menjalani pemeliharaan rutin untuk meningkatkan performa dan keamanan. Layanan akan tetap tersedia dengan beberapa keterbatasan akses.",
        fullContent: "Pemeliharaan sistem PPID yang terjadwal minggu depan merupakan bagian dari upaya berkelanjutan untuk menjaga kualitas dan keamanan layanan informasi publik. Proses pemeliharaan ini meliputi update sistem keamanan, optimasi database, dan peningkatan fitur-fitur yang ada. Selama periode pemeliharaan, beberapa layanan mungkin mengalami keterbatasan akses, namun layanan darurat tetap akan tersedia. Tim teknis akan bekerja 24/7 untuk memastikan proses pemeliharaan berjalan lancar dan sistem dapat kembali beroperasi normal sesuai jadwal.",
        image: "https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "11 Desember 2024",
        author: "Tim Teknis PPID",
        views: 423,
        category: "Pengumuman"
    },
    6: {
        id: 6,
        title: "Integrasi AI dalam Sistem Pelayanan Informasi Publik",
        excerpt: "Implementasi teknologi artificial intelligence untuk meningkatkan efisiensi dan akurasi dalam pelayanan informasi publik.",
        fullContent: "PPID mengimplementasikan teknologi artificial intelligence (AI) untuk meningkatkan kualitas pelayanan informasi publik. Sistem AI ini akan membantu dalam kategorisasi otomatis permohonan informasi, memberikan respons cepat untuk pertanyaan umum, dan menganalisis pola permintaan informasi untuk optimasi layanan. Fitur chatbot AI akan tersedia 24/7 untuk memberikan bantuan awal kepada pemohon informasi. Teknologi machine learning juga digunakan untuk memprediksi kebutuhan informasi masyarakat dan menyiapkan data yang relevan.",
        image: "https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "10 Desember 2024",
        author: "Divisi Inovasi PPID",
        views: 567,
        category: "Inovasi"
    },
    7: {
        id: 7,
        title: "Kerjasama PPID dengan Universitas untuk Penelitian Transparansi",
        excerpt: "Program kolaborasi dengan institusi pendidikan tinggi untuk mengembangkan penelitian tentang transparansi dan akuntabilitas pemerintah.",
        fullContent: "PPID menjalin kerjasama strategis dengan beberapa universitas terkemuka untuk mengembangkan penelitian tentang transparansi dan akuntabilitas pemerintah. Program kolaborasi ini meliputi penelitian tentang efektivitas implementasi UU KIP, analisis dampak keterbukaan informasi terhadap partisipasi publik, dan pengembangan model-model inovatif dalam pelayanan informasi. Mahasiswa dan dosen akan terlibat dalam riset lapangan, analisis data, dan pengembangan rekomendasi kebijakan.",
        image: "https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "9 Desember 2024",
        author: "Kepala PPID",
        views: 389,
        category: "Kerjasama"
    },
    8: {
        id: 8,
        title: "Pelatihan Pengelolaan Dokumen Digital untuk Aparatur",
        excerpt: "Program pelatihan komprehensif untuk meningkatkan kemampuan aparatur dalam mengelola dokumen digital sesuai standar keamanan informasi.",
        fullContent: "Program pelatihan pengelolaan dokumen digital untuk aparatur pemerintah merupakan inisiatif strategis untuk meningkatkan kapasitas SDM dalam era digitalisasi pemerintahan. Pelatihan ini mencakup teknik digitalisasi dokumen, sistem keamanan informasi, metadata management, dan prosedur backup yang aman. Aparatur akan dibekali dengan pengetahuan tentang standar internasional pengelolaan dokumen digital dan best practices dalam menjaga integritas serta aksesibilitas informasi publik.",
        image: "https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "8 Desember 2024",
        author: "Divisi SDM PPID",
        views: 445,
        category: "Pelatihan"
    },
    9: {
        id: 9,
        title: "Evaluasi Kinerja PPID Semester II Tahun 2024",
        excerpt: "Laporan komprehensif evaluasi kinerja PPID semester kedua tahun 2024 menunjukkan peningkatan signifikan dalam pelayanan informasi publik.",
        fullContent: "PPID telah menyelesaikan evaluasi kinerja semester kedua tahun 2024 dengan hasil yang sangat memuaskan. Evaluasi ini mencakup berbagai aspek pelayanan informasi publik, termasuk waktu respons, tingkat kepuasan masyarakat, dan efektivitas sistem digital. Hasil evaluasi menunjukkan peningkatan 35% dalam waktu respons permohonan informasi, tingkat kepuasan masyarakat mencapai 92%, dan digitalisasi 85% dokumen informasi publik. Berdasarkan evaluasi ini, PPID akan fokus pada peningkatan aksesibilitas website, pengembangan aplikasi mobile, dan pelatihan berkelanjutan untuk petugas PPID.",
        image: "https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80",
        date: "7 Desember 2024",
        author: "Kepala PPID",
        views: 523,
        category: "Evaluasi"
    }
};

// Global variable to track current active news
let currentActiveNewsId = 1;

// Function to update main news content
function updateMainNewsContent(newsItem) {
    const mainNews = document.querySelector('.main-news');
    if (!mainNews || !newsItem) return;

    // Add loading state
    mainNews.classList.add('news-loading');
    
    // Update main news data attribute
    mainNews.setAttribute('data-news-id', newsItem.id);
    
    // Update image
    const mainImage = mainNews.querySelector('.main-news-image img');
    if (mainImage) {
        mainImage.src = newsItem.image;
        mainImage.alt = newsItem.title;
    }
    
    // Update category
    const categoryElement = mainNews.querySelector('.news-category');
    if (categoryElement) {
        categoryElement.textContent = newsItem.category;
    }
    
    // Update date
    const dateElement = mainNews.querySelector('.news-date');
    if (dateElement) {
        dateElement.textContent = newsItem.date;
    }
    
    // Update author
    const authorElement = mainNews.querySelector('.news-author span');
    if (authorElement) {
        authorElement.textContent = newsItem.author;
    }
    
    // Update views
    const viewsElement = mainNews.querySelector('.news-views span');
    if (viewsElement) {
        viewsElement.textContent = newsItem.views.toLocaleString();
    }
    
    // Update title
    const titleElement = mainNews.querySelector('.main-news-title');
    if (titleElement) {
        titleElement.textContent = newsItem.title;
    }
    
    // Update excerpt/content
    const excerptElement = mainNews.querySelector('.main-news-excerpt');
    if (excerptElement) {
        excerptElement.textContent = newsItem.fullContent;
    }
    
    // Remove loading state after content update
    setTimeout(() => {
        mainNews.classList.remove('news-loading');
    }, 300);
}

// Function to update sidebar active state
function updateSidebarActiveState(activeNewsId) {
    // Remove active class from all news items
    document.querySelectorAll('.news-item').forEach(item => {
        item.classList.remove('news-item-active');
    });
    
    // Add active class to clicked item
    const activeItem = document.querySelector(`[data-news-id="${activeNewsId}"]`);
    if (activeItem && activeItem.classList.contains('news-item')) {
        activeItem.classList.add('news-item-active');
    }
}

// Function to handle news item click
function handleNewsItemClick(newsId) {
    // Prevent switching to the same news
    if (currentActiveNewsId === parseInt(newsId)) {
        return;
    }
    
    const newsItem = newsData[newsId];
    if (!newsItem) {
        console.error('News item not found:', newsId);
        return;
    }
    
    // Update current active news ID
    currentActiveNewsId = parseInt(newsId);
    
    // Update main news content
    updateMainNewsContent(newsItem);
    
    // Update sidebar active state
    updateSidebarActiveState(newsId);
    
    // Smooth scroll to main news (optional)
    const mainNews = document.querySelector('.main-news');
    if (mainNews) {
        mainNews.scrollIntoView({ 
            behavior: 'smooth', 
            block: 'start' 
        });
    }
    
    // Analytics tracking (optional)
    if (typeof gtag !== 'undefined') {
        gtag('event', 'news_switch', {
            'news_id': newsId,
            'news_title': newsItem.title
        });
    }
}

// Function to initialize news switching functionality
function initNewsSwitching() {
    // Add click event listeners to all news items
    document.querySelectorAll('.news-item[data-news-id]').forEach(item => {
        const newsId = item.getAttribute('data-news-id');
        
        // Click event
        item.addEventListener('click', (e) => {
            e.preventDefault();
            handleNewsItemClick(newsId);
        });
        
        // Keyboard accessibility
        item.addEventListener('keydown', (e) => {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                handleNewsItemClick(newsId);
            }
        });
        
        // Add hover effect
        item.addEventListener('mouseenter', () => {
            item.style.transform = 'translateX(5px)';
        });
        
        item.addEventListener('mouseleave', () => {
            item.style.transform = 'translateX(0)';
        });
    });
    
    // Set initial active state
    updateSidebarActiveState(currentActiveNewsId);
}

// Function to preload news images for better performance
function preloadNewsImages() {
    Object.values(newsData).forEach(news => {
        const img = new Image();
        img.src = news.image;
    });
}

// Initialize news functionality when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    initNewsSwitching();
    preloadNewsImages();
    
    // Initialize news scroll functionality if exists
    if (typeof initNewsScrollFunctionality === 'function') {
        initNewsScrollFunctionality();
    }
});

// Handle window resize for responsive behavior
window.addEventListener('resize', function() {
    // Reinitialize if needed for responsive adjustments
    const newsContainer = document.querySelector('.news-container');
    if (newsContainer) {
        // Add any responsive adjustments here
    }
});

//
/********************* Enhanced Dropdown Functionality ************************/
//

// Auto-close dropdown on scroll
function handleDropdownAutoClose() {
    const dropdowns = document.querySelectorAll('.dropdown-menu.show');
    dropdowns.forEach(dropdown => {
        const dropdownToggle = dropdown.previousElementSibling;
        if (dropdownToggle && window.bootstrap) {
            const bsDropdown = window.bootstrap.Dropdown.getInstance(dropdownToggle);
            if (bsDropdown) {
                bsDropdown.hide();
            }
        }
    });
}

// Enhanced scroll handler that includes dropdown auto-close
function enhancedWindowScroll() {
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add("nav-sticky");
    } else {
        navbar.classList.remove("nav-sticky");
    }
    
    // Auto-close dropdowns on scroll
    handleDropdownAutoClose();
}

// Smart dropdown positioning
function adjustDropdownPosition(dropdown) {
    const rect = dropdown.getBoundingClientRect();
    const viewportHeight = window.innerHeight;
    const viewportWidth = window.innerWidth;
    
    // Reset classes
    dropdown.classList.remove('dropup', 'dropstart', 'dropend');
    
    // Check if dropdown goes below viewport
    if (rect.bottom > viewportHeight - 20) {
        dropdown.classList.add('dropup');
    }
    
    // Check if dropdown goes beyond right edge (for mobile)
    if (rect.right > viewportWidth - 20) {
        dropdown.classList.add('dropstart');
    }
}

// Keyboard navigation for dropdown
function initDropdownKeyboardNavigation() {
    document.addEventListener('keydown', function(e) {
        const activeDropdown = document.querySelector('.dropdown-menu.show');
        if (!activeDropdown) return;
        
        const items = activeDropdown.querySelectorAll('.dropdown-item:not(.disabled)');
        const currentFocus = document.activeElement;
        let currentIndex = Array.from(items).indexOf(currentFocus);
        
        switch(e.key) {
            case 'ArrowDown':
                e.preventDefault();
                currentIndex = currentIndex < items.length - 1 ? currentIndex + 1 : 0;
                items[currentIndex].focus();
                break;
            case 'ArrowUp':
                e.preventDefault();
                currentIndex = currentIndex > 0 ? currentIndex - 1 : items.length - 1;
                items[currentIndex].focus();
                break;
            case 'Escape':
                e.preventDefault();
                const dropdownToggle = activeDropdown.previousElementSibling;
                if (dropdownToggle && window.bootstrap) {
                    const bsDropdown = window.bootstrap.Dropdown.getInstance(dropdownToggle);
                    if (bsDropdown) {
                        bsDropdown.hide();
                        dropdownToggle.focus();
                    }
                }
                break;
            case 'Home':
                e.preventDefault();
                items[0].focus();
                break;
            case 'End':
                e.preventDefault();
                items[items.length - 1].focus();
                break;
        }
    });
}

// Ripple effect for dropdown items
function addRippleEffect(element, event) {
    const ripple = document.createElement('span');
    const rect = element.getBoundingClientRect();
    const size = Math.max(rect.width, rect.height);
    const x = event.clientX - rect.left - size / 2;
    const y = event.clientY - rect.top - size / 2;
    
    ripple.style.cssText = `
        position: absolute;
        width: ${size}px;
        height: ${size}px;
        left: ${x}px;
        top: ${y}px;
        background: radial-gradient(circle, rgba(255, 152, 0, 0.3) 0%, transparent 70%);
        border-radius: 50%;
        transform: scale(0);
        animation: ripple 0.6s ease-out;
        pointer-events: none;
        z-index: 1;
    `;
    
    element.style.position = 'relative';
    element.style.overflow = 'hidden';
    element.appendChild(ripple);
    
    setTimeout(() => {
        ripple.remove();
    }, 600);
}

// Staggered animation for dropdown items
function animateDropdownItems(dropdown, isShowing) {
    const items = dropdown.querySelectorAll('.dropdown-item');
    
    items.forEach((item, index) => {
        if (isShowing) {
            item.style.opacity = '0';
            item.style.transform = 'translateY(-10px) translateX(-10px)';
            
            setTimeout(() => {
                item.style.transition = 'all 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0) translateX(0)';
            }, index * 50);
        } else {
            item.style.transition = 'all 0.2s ease-out';
            item.style.opacity = '0';
            item.style.transform = 'translateY(-5px) scale(0.95)';
        }
    });
}

// Touch gesture support for mobile
function initTouchGestures() {
    let startY = 0;
    let startTime = 0;
    
    document.addEventListener('touchstart', function(e) {
        const activeDropdown = document.querySelector('.dropdown-menu.show');
        if (!activeDropdown) return;
        
        startY = e.touches[0].clientY;
        startTime = Date.now();
    }, { passive: true });
    
    document.addEventListener('touchend', function(e) {
        const activeDropdown = document.querySelector('.dropdown-menu.show');
        if (!activeDropdown) return;
        
        const endY = e.changedTouches[0].clientY;
        const endTime = Date.now();
        const deltaY = endY - startY;
        const deltaTime = endTime - startTime;
        
        // Swipe down to close (mobile)
        if (deltaY > 50 && deltaTime < 300 && window.innerWidth <= 768) {
            const dropdownToggle = activeDropdown.previousElementSibling;
            if (dropdownToggle && window.bootstrap) {
                const bsDropdown = window.bootstrap.Dropdown.getInstance(dropdownToggle);
                if (bsDropdown) {
                    bsDropdown.hide();
                }
            }
        }
    }, { passive: true });
}

// Initialize dropdown enhancements
function initDropdownEnhancements() {
    // Replace the original scroll handler
    window.removeEventListener('scroll', windowScroll);
    window.addEventListener('scroll', enhancedWindowScroll);
    
    // Initialize keyboard navigation
    initDropdownKeyboardNavigation();
    
    // Initialize touch gestures
    initTouchGestures();
    
    // Add event listeners for dropdown events
    document.addEventListener('show.bs.dropdown', function(e) {
        const dropdown = e.target.nextElementSibling;
        if (dropdown) {
            // Adjust position
            setTimeout(() => {
                adjustDropdownPosition(dropdown);
                animateDropdownItems(dropdown, true);
            }, 10);
        }
    });
    
    document.addEventListener('hide.bs.dropdown', function(e) {
        const dropdown = e.target.nextElementSibling;
        if (dropdown) {
            animateDropdownItems(dropdown, false);
        }
    });
    
    // Add ripple effect to dropdown items
    document.addEventListener('click', function(e) {
        if (e.target.classList.contains('dropdown-item')) {
            addRippleEffect(e.target, e);
        }
    });
    
    // Enhanced hover effects
    document.querySelectorAll('.dropdown-item').forEach(item => {
        item.addEventListener('mouseenter', function() {
            this.style.transform = 'translateX(5px)';
        });
        
        item.addEventListener('mouseleave', function() {
            this.style.transform = 'translateX(0)';
        });
    });
    
    // Close dropdown on outside click
    document.addEventListener('click', function(e) {
        const activeDropdown = document.querySelector('.dropdown-menu.show');
        if (activeDropdown && !activeDropdown.contains(e.target) && !e.target.classList.contains('dropdown-toggle')) {
            const dropdownToggle = activeDropdown.previousElementSibling;
            if (dropdownToggle && window.bootstrap) {
                const bsDropdown = window.bootstrap.Dropdown.getInstance(dropdownToggle);
                if (bsDropdown) {
                    bsDropdown.hide();
                }
            }
        }
    });
    
    // Close dropdown on window resize
    window.addEventListener('resize', function() {
        handleDropdownAutoClose();
    });
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', function() {
    // Wait for Bootstrap to be ready
    setTimeout(() => {
        initDropdownEnhancements();
    }, 100);
});
