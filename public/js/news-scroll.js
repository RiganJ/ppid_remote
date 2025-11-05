/**
 * News Sidebar Enhanced Scroll Functionality
 * Handles scroll indicators, progress bar, and smooth scrolling
 */

// Check if class already exists to prevent duplicate declaration
if (typeof window.NewsScrollManager === 'undefined') {
    
class NewsScrollManager {
    constructor() {
        this.newsList = null;
        this.scrollProgress = null;
        this.scrollProgressBar = null;
        this.scrollIndicatorTop = null;
        this.scrollIndicatorBottom = null;
        this.scrollFadeTop = null;
        this.scrollFadeBottom = null;
        this.isScrolling = false;
        this.scrollTimeout = null;
        
        this.init();
    }

    init() {
        // Wait for DOM to be ready
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', () => this.setup());
        } else {
            this.setup();
        }
    }

    setup() {
        this.newsList = document.querySelector('.news-list');
        if (!this.newsList) {
            console.warn('News list container not found');
            return;
        }

        this.createScrollElements();
        this.bindEvents();
        this.updateScrollIndicators();
        
        // Initial setup
        setTimeout(() => {
            this.updateScrollIndicators();
            this.updateScrollProgress();
        }, 100);
    }

    createScrollElements() {
        const sidebar = document.querySelector('.news-sidebar');
        if (!sidebar) return;

        // Create scroll indicators
        this.scrollIndicatorTop = document.createElement('div');
        this.scrollIndicatorTop.className = 'scroll-indicator-top';
        sidebar.appendChild(this.scrollIndicatorTop);

        this.scrollIndicatorBottom = document.createElement('div');
        this.scrollIndicatorBottom.className = 'scroll-indicator-bottom';
        sidebar.appendChild(this.scrollIndicatorBottom);

        // Create scroll progress bar
        this.scrollProgress = document.createElement('div');
        this.scrollProgress.className = 'scroll-progress';
        
        this.scrollProgressBar = document.createElement('div');
        this.scrollProgressBar.className = 'scroll-progress-bar';
        this.scrollProgress.appendChild(this.scrollProgressBar);
        
        sidebar.appendChild(this.scrollProgress);

        // Create scroll hint
        const scrollHint = document.createElement('div');
        scrollHint.className = 'scroll-hint';
        scrollHint.textContent = 'Scroll';
        sidebar.appendChild(scrollHint);
    }

    bindEvents() {
        if (!this.newsList) return;

        // Scroll event with throttling
        this.newsList.addEventListener('scroll', this.throttle(() => {
            this.updateScrollIndicators();
            this.updateScrollProgress();
            this.handleScrolling();
        }, 16)); // ~60fps

        // Mouse events for better UX
        this.newsList.addEventListener('mouseenter', () => {
            this.newsList.style.scrollbarWidth = 'auto';
        });

        this.newsList.addEventListener('mouseleave', () => {
            this.newsList.style.scrollbarWidth = 'thin';
        });

        // Touch events for mobile
        this.newsList.addEventListener('touchstart', () => {
            this.newsList.classList.add('is-scrolling');
        });

        this.newsList.addEventListener('touchend', () => {
            setTimeout(() => {
                this.newsList.classList.remove('is-scrolling');
            }, 150);
        });

        // Keyboard navigation
        this.newsList.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowDown' || e.key === 'ArrowUp') {
                e.preventDefault();
                const scrollAmount = 100;
                const direction = e.key === 'ArrowDown' ? 1 : -1;
                this.smoothScroll(this.newsList.scrollTop + (scrollAmount * direction));
            }
        });

        // Resize handler
        window.addEventListener('resize', this.debounce(() => {
            this.updateScrollIndicators();
            this.updateScrollProgress();
        }, 250));
    }

    updateScrollIndicators() {
        if (!this.newsList) return;

        const { scrollTop, scrollHeight, clientHeight } = this.newsList;
        const maxScroll = scrollHeight - clientHeight;

        // Update classes for CSS styling
        this.newsList.classList.toggle('can-scroll-up', scrollTop > 10);
        this.newsList.classList.toggle('can-scroll-down', scrollTop < maxScroll - 10);
        this.newsList.classList.toggle('at-bottom', scrollTop >= maxScroll - 5);
        this.newsList.classList.toggle('at-top', scrollTop <= 5);

        // Update indicator visibility
        if (this.scrollIndicatorTop) {
            this.scrollIndicatorTop.style.opacity = scrollTop > 10 ? '1' : '0';
        }

        if (this.scrollIndicatorBottom) {
            const showBottom = scrollTop < maxScroll - 10 && maxScroll > 0;
            this.scrollIndicatorBottom.style.opacity = showBottom ? '1' : '0';
        }

        // Update fade effects
        if (this.scrollFadeTop) {
            const showTopFade = scrollTop > 5;
            this.scrollFadeTop.style.opacity = showTopFade ? '1' : '0';
        }

        if (this.scrollFadeBottom) {
            const showBottomFade = scrollTop < maxScroll - 10 && maxScroll > 0;
            this.scrollFadeBottom.style.opacity = showBottomFade ? '1' : '0';
        }

        // Add scrolling class for visual feedback
        this.newsList.classList.add('scrolling');
        clearTimeout(this.scrollTimeout);
        this.scrollTimeout = setTimeout(() => {
            this.newsList.classList.remove('scrolling');
        }, 150);
    }

    updateScrollProgress() {
        if (!this.scrollProgressBar || !this.newsList) return;

        const { scrollTop, scrollHeight, clientHeight } = this.newsList;
        const maxScroll = scrollHeight - clientHeight;
        
        if (maxScroll <= 0) {
            this.scrollProgressBar.style.height = '0%';
            return;
        }

        const scrollPercentage = (scrollTop / maxScroll) * 100;
        this.scrollProgressBar.style.height = `${Math.min(scrollPercentage, 100)}%`;

        // Update sidebar progress indicator
        const sidebar = document.querySelector('.news-sidebar');
        if (sidebar) {
            sidebar.style.setProperty('--scroll-progress', `${scrollPercentage}%`);
        }
    }

    handleScrolling() {
        if (!this.newsList) return;

        this.isScrolling = true;
        this.newsList.classList.add('is-scrolling');

        clearTimeout(this.scrollTimeout);
        this.scrollTimeout = setTimeout(() => {
            this.isScrolling = false;
            this.newsList.classList.remove('is-scrolling');
        }, 150);
    }

    smoothScroll(targetPosition) {
        if (!this.newsList) return;

        const startPosition = this.newsList.scrollTop;
        const distance = targetPosition - startPosition;
        const duration = 300;
        let startTime = null;

        const animation = (currentTime) => {
            if (startTime === null) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const progress = Math.min(timeElapsed / duration, 1);

            // Easing function (ease-out)
            const easeOut = 1 - Math.pow(1 - progress, 3);
            
            this.newsList.scrollTop = startPosition + (distance * easeOut);

            if (progress < 1) {
                requestAnimationFrame(animation);
            }
        };

        requestAnimationFrame(animation);
    }

    // Utility functions
    throttle(func, limit) {
        let inThrottle;
        return function() {
            const args = arguments;
            const context = this;
            if (!inThrottle) {
                func.apply(context, args);
                inThrottle = true;
                setTimeout(() => inThrottle = false, limit);
            }
        };
    }

    debounce(func, wait) {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }

    // Public methods
    scrollToTop() {
        this.smoothScroll(0);
    }

    scrollToBottom() {
        if (!this.newsList) return;
        const maxScroll = this.newsList.scrollHeight - this.newsList.clientHeight;
        this.smoothScroll(maxScroll);
    }

    scrollToItem(itemIndex) {
        if (!this.newsList) return;
        
        const items = this.newsList.querySelectorAll('.news-item');
        if (items[itemIndex]) {
            const itemTop = items[itemIndex].offsetTop;
            this.smoothScroll(itemTop - 20); // 20px offset
        }
    }

    // Accessibility improvements
    // addKeyboardNavigation() {
    //     if (!this.newsList) return;

    //     this.newsList.setAttribute('tabindex', '0');
    //     this.newsList.setAttribute('role', 'region');
    //     this.newsList.setAttribute('aria-label', 'Daftar berita lainnya');

    //     // Add ARIA live region for scroll announcements
    //     const liveRegion = document.createElement('div');
    //     liveRegion.setAttribute('aria-live', 'polite');
    //     liveRegion.setAttribute('aria-atomic', 'true');
    //     liveRegion.className = 'sr-only';
    //     liveRegion.id = 'scroll-announcer';
    //     document.body.appendChild(liveRegion);

    //     // Announce scroll position changes
    //     this.newsList.addEventListener('scroll', this.debounce(() => {
    //         const { scrollTop, scrollHeight, clientHeight } = this.newsList;
    //         const maxScroll = scrollHeight - clientHeight;
    //         const percentage = Math.round((scrollTop / maxScroll) * 100);
            
    //         if (percentage === 0) {
    //             liveRegion.textContent = 'Di bagian atas daftar berita';
    //         } else if (percentage === 100) {
    //             liveRegion.textContent = 'Di bagian bawah daftar berita';
    //         }
    //     }, 1000));
    // }
}

// Make class globally available
window.NewsScrollManager = NewsScrollManager;

} // End of duplicate check

// Initialize when DOM is ready
function initNewsScrollFunctionality() {
    // Check if news sidebar exists
    const newsSidebar = document.querySelector('.news-sidebar');
    if (newsSidebar) {
        const scrollManager = new NewsScrollManager();
        
        // Make it globally accessible for debugging
        window.newsScrollManager = scrollManager;
        
        // Add keyboard navigation
        scrollManager.addKeyboardNavigation();
        
        console.log('News scroll functionality initialized');
    } else {
        console.warn('News sidebar not found, scroll functionality not initialized');
    }
}

// Auto-initialize
document.addEventListener('DOMContentLoaded', function() {
    initNewsScrollFunctionality();
});

// Also initialize if DOM is already loaded
if (document.readyState !== 'loading') {
    initNewsScrollFunctionality();
}

// Export for manual initialization if needed
window.initNewsScrollFunctionality = initNewsScrollFunctionality;