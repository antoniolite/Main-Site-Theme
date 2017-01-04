var enableScrollSpy = function($) {
  $('.animate-scroll').click(function(e) {
    e.preventDefault();

    var $sectionsMenu = $('#sections-menu');
    var $target = $(this.hash);
    $target = $target.length ? $target : $('[name=' + this.hash.slice() + ']');

    var scrollTo = $target.offset().top;

    if ($sectionsMenu.length > 0) {
      scrollTo = scrollTo - $sectionsMenu.height() + 20;
    }

    var scrollTo = scrollTo - 150;

    if ($target.length) {
      $('html, body').animate({
        scrollTop: scrollTo
      }, 750);
    }
  });
};

jQuery(document).ready(function($) {
  enableScrollSpy($);
});