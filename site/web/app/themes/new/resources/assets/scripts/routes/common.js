export default {
  init() {
    // JavaScript to be fired on all pages
    $('.hamburger').click(function () {
      $(this).toggleClass('is-active');
      $('.navbar-collapse').toggleClass('show');
    });

const hero = document.querySelector('#homeHero .jumbotron')

function randNum(min, max) { 
  return Math.floor(Math.random() * (max - min + 1) + min)
}

if(hero){
const num = randNum(1,5);
const numString = 'hero-' + num.toString();
hero.classList.add(numString);
}
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

  },
};
