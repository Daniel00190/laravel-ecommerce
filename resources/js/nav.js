var navLinks = document.querySelector('.nav-links');
var menuIcon = document.querySelector('.menu-icon');

menuIcon.addEventListener('click', function() {
    console.log("clicked")
  if (navLinks.classList.contains('show')) {
    navLinks.classList.remove('show');
  } else {
    navLinks.classList.add('show');
  }
});
