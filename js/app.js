

$(document).ready(function () {
    jQuery(window).scroll(function () {

        if (jQuery(window).scrollTop() + $("header").height() == 0)
            $(".arrow").toggleClass("arrow-bottom");

        else if (jQuery(window).height() + jQuery(window).scrollTop() == jQuery(document).height())
            $(".arrow").toggleClass("arrow-bottom");


    });
    let a = jQuery("body").height() -$(window).height() - $("footer").height();
    console.log($("body").height());
    console.log($("footer").height());
    console.log("taille testé " + a );
    jQuery(window).scroll(function () {
        console.log(jQuery(window).scrollTop());
        if (a < $(window).scrollTop()) {
            $(".arrow").addClass("arrow-bottom");
            
        } else {
            $(".arrow").removeClass("arrow-bottom");
        }
    })


    const menuHamburger = document.querySelector(".menu-burger")
    const navLinks = document.querySelector(".navlinks")

    menuHamburger.addEventListener('click',()=>{
    navLinks.classList.toggle('mobile-menu')
    })
    /*
    let X = window.innerHeight;
    let Y = window.innerWidth;
    console.log(X);
    console.log(Y);

    $("footer");


    console.log($("footer").height());
    $(".arrow");
    console.log($(".arrow").height());
    let heightofarrow = $(".arrow").height();
    let heightoffooter = $("footer").height();
    console.log($("footer").position());*/

})