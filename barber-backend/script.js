// Mobile menu toggle
const menuToggle = document.getElementById('menu-toggle');
const mobileMenu = document.getElementById('mobile-menu');

menuToggle.addEventListener('click', () => {
  mobileMenu.classList.toggle('open');
});

// Shopping cart functionality
const cartIcon = document.querySelector('.fa-shopping-cart');
const cartCount = document.querySelector('.relative span');

// Example of adding to cart
function addToCart() {
  let count = parseInt(cartCount.textContent);
  cartCount.textContent = count + 1;
}

// Book appointment button
const bookButtons = document.querySelectorAll('.btn-primary');
bookButtons.forEach(button => {
  button.addEventListener('click', () => {
    alert('Redirecting to booking page...');
  });
});

// Shop button
const shopButtons = document.querySelectorAll('.btn-outline');
shopButtons.forEach(button => {
  button.addEventListener('click', () => {
    alert('Redirecting to shop page...');
  });
});