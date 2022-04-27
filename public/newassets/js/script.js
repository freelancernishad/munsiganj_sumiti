
(() => {

    // Home slider
    var mainSlider = $('.main-slider-content-area');
    mainSlider.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
        autoplay: true,
        items: 1
    });

    // New arrivals
    var localPartner = $('.local-partner');
    localPartner.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1,
                dots: true,
            },
            768: {
                items: 2,
                dots: true
            },
            1024: {
                items: 3,
                dots: true
            },
            1366: {
                items: 4,
                dots: true
            }

        }
    });

    // exicutive-carousel
    var exicutiveCarousel = $('.exicutive-carousel');
    exicutiveCarousel.owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            360: {
                items: 1,
                dots: true,
            },
            768: {
                items: 4,
                dots: true
            },
            1024: {
                items: 5,
                dots: true
            },
            1366: {
                items: 6,
                dots: true
            }
        }
    });

    // exicutive-committee-branch-carousel
    var exicutiveCarousel = $('.exicutive-committee-branch-carousel');
    exicutiveCarousel.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
                dots: true
            },
            360: {
                items: 1,
                dots: true
            },
            768: {
                items: 4,
                dots: true
            },
            1024: {
                items: 5,
                dots: true
            },
            1366: {
                items: 8,
                dots: true
            }
        }
    });


    // New arrivals
    var internationalPartner = $('.international-partner');
    internationalPartner.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1
            },
            400: {
                items: 1,
                dots: true,
            },
            768: {
                items: 2,
                dots: true
            },
            1024: {
                items: 3,
                dots: true
            },
            1366: {
                items: 4,
                dots: true
            }
        }
    });


    // Testimonial area
    var testimonial = $('#testimonial');
    testimonial.owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        autoplay: true,
        items: 1
    });


    // burger menu show and hide start
    let breadcrumb = document.querySelector('.breadcrumb');
    let navContent = document.querySelector('.nav-content');
    // navContent.style.left = '-10000px';
    if (breadcrumb) {
        breadcrumb.addEventListener('click', (event) => {
            if (navContent.style.left == '-10000px') {
                navContent.style.left = '0px';
            } else if (navContent.style.left == '0px') {
                navContent.style.left = '-10000px';
            }
        });
    }

    // Menu area mobile item start
    var dropDownBtn = document.querySelectorAll(".dropdown-btn");
    dropDownBtn.forEach((item, key) => {
        item.addEventListener('click', (event) => {
            event.preventDefault();
            var dropdownContainer = event.target.closest('li').querySelector('.dropdown-container');
            // icon target
            var icon = event.target.querySelector('svg');

            // first icon remove
            icon.removeAttribute('data-icon');
            if (dropdownContainer.style.display == 'block') {
                dropdownContainer.style.display = 'none';
                event.target.classList.remove('mobile-menu-active');
                icon.setAttribute('data-icon', 'chevron-right');
            } else {
                dropdownContainer.style.display = 'block';
                event.target.classList.add('mobile-menu-active');
                icon.setAttribute('data-icon', 'chevron-down');
            }
        });
    });
    // Menu area mobile item End


    // Set mixitup on shortable item
    // var containerEl = document.querySelector('.short-able-item');
    // var mixer = mixitup(containerEl);

    $(window).on("scroll",function(scrollpos){
        if($(window).scrollTop() > 150){
            $('.main-menu').addClass('menu-top-fixed');
            $('.mobile-main-menu-area').addClass('menu-top-fixed');
        }else{
            $('.main-menu').removeClass('menu-top-fixed');
            $('.mobile-main-menu-area').removeClass('menu-top-fixed');
        }
    });


})();


