/**
 * Main Admin Panel JavaScript
 */

(function() {
    'use strict';

    // Initialize when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        initSidebar();
        initTooltips();
        initDropdowns();
        initPasswordToggle();
        initFormValidation();
    });

    /**
     * Initialize Sidebar
     */
    function initSidebar() {
        const menuToggle = document.querySelector('.menu-toggle');
        const layoutMenu = document.querySelector('.layout-menu');
        const overlay = document.querySelector('.layout-overlay');

        if (menuToggle) {
            menuToggle.addEventListener('click', function() {
                if (layoutMenu) {
                    layoutMenu.classList.toggle('show');
                }
                if (overlay) {
                    overlay.classList.toggle('show');
                }
            });
        }

        if (overlay) {
            overlay.addEventListener('click', function() {
                layoutMenu.classList.remove('show');
                overlay.classList.remove('show');
            });
        }

        // Set active menu item
        const currentPath = window.location.pathname;
        const menuLinks = document.querySelectorAll('.menu-link');
        
        menuLinks.forEach(link => {
            if (link.getAttribute('href') === currentPath) {
                link.classList.add('active');
            }
        });
    }

    /**
     * Initialize Tooltips
     */
    function initTooltips() {
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        if (typeof bootstrap !== 'undefined' && bootstrap.Tooltip) {
            tooltipTriggerList.map(function(tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        }
    }

    /**
     * Initialize Dropdowns
     */
    function initDropdowns() {
        const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
        if (typeof bootstrap !== 'undefined' && bootstrap.Dropdown) {
            dropdownElementList.map(function(dropdownToggleEl) {
                return new bootstrap.Dropdown(dropdownToggleEl);
            });
        }
    }

    /**
     * Initialize Password Toggle
     */
    function initPasswordToggle() {
        const passwordToggles = document.querySelectorAll('.password-toggle');
        
        passwordToggles.forEach(toggle => {
            toggle.addEventListener('click', function() {
                const input = this.parentElement.querySelector('input');
                const icon = this.querySelector('i');
                
                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.remove('bx-hide');
                    icon.classList.add('bx-show');
                } else {
                    input.type = 'password';
                    icon.classList.remove('bx-show');
                    icon.classList.add('bx-hide');
                }
            });
        });
    }

    /**
     * Initialize Form Validation
     */
    function initFormValidation() {
        const forms = document.querySelectorAll('.needs-validation');
        
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    }

    /**
     * Show Alert
     */
    window.showAlert = function(message, type = 'success') {
        const alertContainer = document.querySelector('.alert-container') || document.body;
        const alertId = 'alert-' + Date.now();
        
        const alertHTML = `
            <div id="${alertId}" class="alert alert-${type} alert-dismissible fade show" role="alert">
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        `;
        
        alertContainer.insertAdjacentHTML('afterbegin', alertHTML);
        
        // Auto dismiss after 5 seconds
        setTimeout(() => {
            const alert = document.getElementById(alertId);
            if (alert) {
                alert.remove();
            }
        }, 5000);
    };

    /**
     * Confirm Dialog
     */
    window.confirmAction = function(message, callback) {
        if (confirm(message)) {
            callback();
        }
    };

    /**
     * Format Number
     */
    window.formatNumber = function(num) {
        return new Intl.NumberFormat('id-ID').format(num);
    };

    /**
     * Format Date
     */
    window.formatDate = function(date, options = {}) {
        const defaultOptions = {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        
        return new Intl.DateTimeFormat('id-ID', { ...defaultOptions, ...options }).format(new Date(date));
    };

    /**
     * Copy to Clipboard
     */
    window.copyToClipboard = function(text) {
        navigator.clipboard.writeText(text).then(function() {
            showAlert('Teks berhasil disalin ke clipboard', 'success');
        }, function() {
            showAlert('Gagal menyalin teks', 'danger');
        });
    };

    /**
     * Loading State
     */
    window.setLoading = function(element, loading = true) {
        if (loading) {
            element.disabled = true;
            element.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>Loading...';
        } else {
            element.disabled = false;
            element.innerHTML = element.getAttribute('data-original-text') || 'Submit';
        }
    };

})();