
console.log(jQuery(window).scrollTop());

$( document ).ready(function() {
    jQuery(window).scroll(function () {

	    if (jQuery(window).scrollTop() == 0)
	        console.log('Scroll en haut de page');

	    else if (jQuery(window).height() + jQuery(window).scrollTop() == jQuery(document).height())
	        console.log('Scroll en bas de page');

});
jQuery(window).scroll(function () {
    if (((jQuery("window").scrollTop() + jQuery(window).height()) - $("footer").height()) > $(".arrow").height()){
        $(".arrow").toggleClass("arrow-bottom");
    }else{
        $(".arrow").toggleClass(".arrow");
    }
})
let X =  window.innerHeight;
let Y = window.innerWidth;
console.log(X);
console.log(Y);

$("footer");



console.log($("footer").height());
$(".arrow");
console.log($(".arrow").height());
let heightofarrow = $(".arrow").height();
let heightoffooter = $("footer").height();
console.log($("footer").position());

})