'use strict';

document.addEventListener('DOMContentLoaded', function() {
    const appointmentForm = document.getElementById('appointmentForm');
    const submitBtn = document.getElementById('submitBtn');
    const formSuccess = document.getElementById('formSuccess');
    const formError = document.getElementById('formError');
    
    // Form validation
    appointmentForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        formSuccess.style.display = 'none';
        formError.style.display = 'none';
        
        const nameInput = document.getElementById('nameInput');
        const emailInput = document.getElementById('emailInput');
        const phoneInput = document.getElementById('phoneInput');
        const serviceSelect = document.getElementById('serviceSelect');
        const dateInput = document.getElementById('dateInput');
        const timeInput = document.getElementById('timeInput');
        
        let isValid = true;
        
        // Validate name
        if (nameInput.value.trim() === '') {
            nameInput.style.borderColor = '#e74c3c';
            isValid = false;
        } else {
            nameInput.style.borderColor = '';
        }
        
        // Validate email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(emailInput.value.trim())) {
            emailInput.style.borderColor = '#e74c3c';
            isValid = false;
        } else {
            emailInput.style.borderColor = '';
        }
        
        // Validate phone (simple validation)
        if (phoneInput.value.trim() === '' || phoneInput.value.trim().length < 8) {
            phoneInput.style.borderColor = '#e74c3c';
            isValid = false;
        } else {
            phoneInput.style.borderColor = '';
        }
        
        // Validate service
        if (serviceSelect.value === '') {
            serviceSelect.style.borderColor = '#e74c3c';
            isValid = false;
        } else {
            serviceSelect.style.borderColor = '';
        }
        
        // Validate date
        if (dateInput.value === '') {
            dateInput.style.borderColor = '#e74c3c';
            isValid = false;
        } else {
            dateInput.style.borderColor = '';
        }
        
        // Validate time
        if (timeInput.value === '') {
            timeInput.style.borderColor = '#e74c3c';
            isValid = false;
        } else {
            timeInput.style.borderColor = '';
        }
        
        if (isValid) {
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<span class="span">Processing...</span>';
            
            setTimeout(function() {
                formSuccess.style.display = 'flex';
                
                appointmentForm.reset();
                submitBtn.disabled = false;
                submitBtn.innerHTML = '<span class="span">Book Appointment</span><ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>';
                
                setTimeout(function() {
                    formSuccess.style.display = 'none';
                }, 5000);
            }, 1500);
        } else {
            formError.style.display = 'flex';
        }
    });
    
    const inputs = document.querySelectorAll('.input-field');
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            this.style.borderColor = '';
            formError.style.display = 'none';
        });
    });
    
    const serviceSelect = document.getElementById('serviceSelect');
    serviceSelect.addEventListener('change', function() {
        if (this.value !== '') {
            this.style.color = 'var(--white)';
        } else {
            this.style.color = 'var(--white_50)';
        }
    });
    
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('dateInput').setAttribute('min', today);

    document.getElementById('timeInput').addEventListener('focus', function() {
        this.setAttribute('min', '09:00');
        this.setAttribute('max', '21:00');
    });
    
    const formElements = document.querySelectorAll('.input-group, .form-btn');
    formElements.forEach((element, index) => {
        element.style.opacity = '0';
        element.style.transform = 'translateY(20px)';
        element.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
        
        setTimeout(() => {
            element.style.opacity = '1';
            element.style.transform = 'translateY(0)';
        }, 100);
    });
});

/**
 * add event on element
 */

const addEventOnElem = function (elem, type, callback) {
  if (!elem) return;
  
  if (elem.length > 1) {
    for (let i = 0; i < elem.length; i++) {
      if (elem[i]) elem[i].addEventListener(type, callback);
    }
  } else {
    if (elem.addEventListener) elem.addEventListener(type, callback);
  }
}


/**
 * navbar toggle
 */

const navbar = document.querySelector("[data-navbar]");
const navToggler = document.querySelector("[data-nav-toggler]");
const navLinks = document.querySelectorAll("[data-nav-link]");

const toggleNavbar = () => navbar.classList.toggle("active");

addEventOnElem(navToggler, "click", toggleNavbar);

const closeNavbar = () => navbar.classList.remove("active");

addEventOnElem(navLinks, "click", closeNavbar);



/**
 * header & back top btn active when scroll down to 100px
 */

const header = document.querySelector("[data-header]");
const backTopBtn = document.querySelector("[data-back-top-btn]");

const headerActive = function () {
  if (window.scrollY > 100) {
    header.classList.add("active");
    backTopBtn.classList.add("active");
  } else {
    header.classList.remove("active");
    backTopBtn.classList.remove("active");
  }
}

addEventOnElem(window, "scroll", headerActive);



/**
 * filter function
 */

const filterBtns = document.querySelectorAll("[data-filter-btn]");
const filterItems = document.querySelectorAll("[data-filter]");

let lastClickedFilterBtn = filterBtns[0];

// Di dalam script.js, perbarui fungsi filter dengan ini:
const filter = function () {
  lastClickedFilterBtn.classList.remove("active");
  this.classList.add("active");
  lastClickedFilterBtn = this;

  // Animasi fade out sebelum filter
  for (let i = 0; i < filterItems.length; i++) {
    filterItems[i].style.opacity = '0';
    filterItems[i].style.transform = 'translateY(20px)';
  }

  // Setelah animasi fade out selesai, lakukan filter
  setTimeout(() => {
    for (let i = 0; i < filterItems.length; i++) {
      if (this.dataset.filterBtn === filterItems[i].dataset.filter ||
        this.dataset.filterBtn === "all") {

        filterItems[i].style.display = "block";
        filterItems[i].classList.add("active");
        
        // Animasi fade in
        setTimeout(() => {
          filterItems[i].style.opacity = '1';
          filterItems[i].style.transform = 'translateY(0)';
          filterItems[i].style.transition = 'all 0.3s ease';
        }, 50 * i);

      } else {
        filterItems[i].style.display = "none";
        filterItems[i].classList.remove("active");
      }
    }
  }, 300);
}

addEventOnElem(filterBtns, "click", filter);