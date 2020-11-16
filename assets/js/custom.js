jQuery(window).trigger('resize').trigger('scroll');

$('.parallax-window').parallax({
  naturalWidth: 600,
  naturalHeight: 400
});

$(function () {
  $(document).scroll(function () {
	 var $nav = $(".navbar.fixed-top");
	 $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });
});
