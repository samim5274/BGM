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
    spinner();
    
    
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').css('top', '0px');
        } else {
            $('.sticky-top').css('top', '-100px');
        }
    });
    
    
    // Dropdown on mouse hover
    document.addEventListener("DOMContentLoaded", function () {
        const toggle = document.getElementById('mega');
        const menu = document.getElementById('mega-menu');

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            menu.classList.toggle('show');
        });

        document.addEventListener('click', function (e) {
            if (!toggle.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.remove('show');
            }
        });
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
        $('html, body').animate({scrollTop: 0});
        return false;
    });

})(jQuery);



  // footer section
    fetch('../footer.html')
    .then(res => res.text())
    .then(data => {
        document.getElementById('include-footer').innerHTML = data;
    });



// course image head
// Helper function to add image

// function appendCourseImage(containerId, src) {
//     const img = document.createElement('img');
//     img.src = src;
//     img.alt = 'Course Image';
//     img.style.width = '100%';
//     img.style.height = 'auto';
//     const obj = document.getElementById(containerId);
//     if (obj) {
//         obj.appendChild(img);
//     }
// }

// // Wait until DOM is fully loaded
// document.addEventListener("DOMContentLoaded", function () {
//     appendCourseImage('basic-graphics', 'img/basic-graphic-design-banner.jpeg');
//     appendCourseImage('advance-graphics', 'img/advacne-graphic-design-banner.jpeg'); 
//     appendCourseImage('motion', 'img/motion-design-banner.jpeg'); 
// });

