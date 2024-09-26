(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);

   // Function to type the text
function typeText(element, text, delay = 100) {
    let i = 0;
    function typing() {
        if (i < text.length) {
            element.innerHTML += text.charAt(i);
            i++;
            setTimeout(typing, delay);
        } else {
            setTimeout(function () {
                // Call the preloader after typing completes
                preloader();
            }, 500);
        }
    }
    typing();
}

// Preloader (Hide after page load with sliding effect)
// var preloader = function () {
//     setTimeout(function () {
//         if ($('#preloader').length > 0) {
            // Add the class to trigger the curtain animation
//             $('#preloader').addClass('hide-preloader');

//             // After the sliding animation ends, remove the preloader and show the content
//             setTimeout(function () {
//                 $('#preloader').remove();
//                 $('#main-content').fadeIn('slow'); // Show main content
//             }, 1500); // Matches the slide animation duration
//         }
//     }, 1500); // Adjust the delay as needed
// };


// window.onload = function() {
//      var typingElement = document.getElementById('typing-text');
//      typeText(typingElement, "ABBA PRINTING PRESS L.L.C", 150); // Adjust typing speed here
// };
var preloader = function () {
    setTimeout(function () {
        if ($('#preloader').length > 0) {
            // Add class to trigger curtain animation
            $('#preloader').addClass('hide-preloader');

            // After the sliding animation ends, remove the preloader and show the content
            setTimeout(function () {
                $('#preloader').remove();  // Remove preloader
                $('#main-content').fadeIn('slow');  // Show main content
            }, 1500); // Matches the slide animation duration
        }
    }, 1500); // Adjust the delay if needed
};

window.onload = function() {
    var preloaderImage = document.getElementById('preloader-image');
    // You can manipulate the image if needed here (e.g., change source, style, etc.)
    if (preloaderImage) {
        // Example: preloaderImage.style.border = '2px solid red'; // Add custom styling if needed
    }

    // Call preloader function once window is fully loaded
    preloader();
};


    
    // Initiate the wowjs
    new WOW().init();

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });


    // Hero Header carousel
    $(".header-carousel").owlCarousel({
        animateOut: 'fadeOut',
        items: 1,
        margin: 0,
        stagePadding: 0,
        autoplay: true,
        smartSpeed: 500,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });


    // attractions carousel
    $(".blog-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: false,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // testimonial carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: false,
        dots: true,
        loop: true,
        margin: 25,
        nav : true,
        navText : [
            '<i class="fa fa-angle-right"></i>',
            '<i class="fa fa-angle-left"></i>'
        ],
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 5,
        time: 2000
    });


   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


})(jQuery);

