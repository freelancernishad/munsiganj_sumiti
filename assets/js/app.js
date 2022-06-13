$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
            },
            600: {
                items: 3,
                nav: true,
            },
            1000: {
                items: 5,
                nav: true,
                loop: true,
            },
        },
    });
    const swiper = new Swiper(".swiper", {
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        init: true,
        updateOnWindowResize: true,
        preloadImages: true,
        updateOnImagesReady: true,
        loop: true,
        autoplay: true,
        initialSlide: 0,
        speed: 300,
    });
});


function mobileNav(){
var mobileNav = $('#mobileNav');

mobileNav.toggleClass('mobileNav');
}


function sidebarNav(){
var sidebarNav = $('#sidebarNav');

var side_icon = $('#side_icon');


side_icon.toggleClass('fa-arrow-right');
side_icon.toggleClass('fa-arrow-left');
sidebarNav.toggleClass('sidebarNav');
}



function submenuShow(id){


var length = $('.dropdownItem').length;
for(var i =1;i<=length;i++){


if(id==i){
$('#'+id).toggleClass('show_dropdown');
}else{
$('#'+i).removeClass('show_dropdown');
}


}


}


