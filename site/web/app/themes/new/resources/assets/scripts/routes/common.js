// import ScrollReveal from 'scrollreveal/dist/scrollreveal';

export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('.navbar-collapse').toggleClass('show');
    });
   // ScrollReveal().reveal('.reveal',{ duration: 1000, interval:1000, viewFactor: .5 });
   // ScrollReveal().reveal('.up',{ distance: '20px'});
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
   
  },
};
