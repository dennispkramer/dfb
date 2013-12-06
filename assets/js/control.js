$(window).scroll(function(){
var opac = $(window).scrollTop() / ($('.header-image').height() - 50);
$('.header-image').css({'background': 'linear-gradient(rgba(0,0,0,' + opac + '),rgba(0,0,0,' + opac + ')), url(/assets/images/01.jpg)', 'background-repeat':'no-repeat','background-size':'cover', 'background-position': 'center'});
});
