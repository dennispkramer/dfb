$(window).scroll(function(){
	var opac = $(window).scrollTop() / ($('.image-wrap').height() - 50);
	var blur = $(window).scrollTop() / 30;
	$('.image-opacity-fade').css('background', 'rgba(0,0,0,' + opac + ')');
	// $('.header-image').css('-webkit-filter', 'blur('+ blur + 'px)');
});

// KILLS BLUR AFTER 400 px
$(window).scroll(function(){
    if ($(this).scrollTop() > 400) {
        $('.header-image').css('-webkit-filter', 'blur(0)');
    }
    else {
    }
});

// HEADROOM.JS FOR SCROLLED NAVBAR
var headroom = new Headroom(elem, {
  "tolerance": 5,
  "offset": 205,
  "classes": {
    "initial": "animated",
    "pinned": "slideDown",
    "unpinned": "slideUp"
  }
});
headroom.init();

// to destroy
headroom.destroy();