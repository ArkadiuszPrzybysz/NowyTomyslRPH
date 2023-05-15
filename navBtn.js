const menuBtn = document.querySelector('.menu-btn');

const navLinks = document.querySelector('.nav-links');

const smallLink = document.querySelectorAll('.smallLink');

let menuOpen = false;

menuBtn.addEventListener('click', () => {

  if(!menuOpen) {

    menuBtn.classList.add('open');

    menuOpen = true;

    navLinks.classList.remove('mobile-menu');

  } else {

    menuBtn.classList.remove('open');

    menuOpen = false;

    navLinks.classList.add('mobile-menu');

  }

});


const smallLinks = document.querySelectorAll('.smallLink');

smallLinks.forEach(smallLink => {
  smallLink.addEventListener('click', () => {
    if (window.innerWidth <= 1500) {
      navLinks.classList.add('mobile-menu');
      menuBtn.classList.remove('open');
      menuOpen = false;

      if (document.body.style.overflowY === 'hidden') {
        document.body.style.overflowY = 'auto';
      } else {
        document.body.style.overflowY = 'hidden';
      }
    }
  });
});





window.addEventListener("scroll", function(){

  var header = this.document.querySelector("nav");

  header.classList.toggle("sticky", window.scrollY > 0);

});



menuBtn.addEventListener("click", function() {
  if (document.body.style.overflowY === 'hidden') {
    document.body.style.overflowY = 'auto';
  } else {
    document.body.style.overflowY = 'hidden';
  }
});


