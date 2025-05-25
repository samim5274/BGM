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



    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        margin: 24,
        dots: true,
        loop: true,
        nav : false,
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            }
        }
    });
    
})(jQuery);

// software section

function filterCourses(category) {
    const buttons = document.querySelectorAll('.filter-btn');
    buttons.forEach(btn => btn.classList.remove('active'));

    const clickedButton = document.querySelector(`[data-category="${category}"]`);
    if (clickedButton) clickedButton.classList.add('active');

    const items = document.querySelectorAll('.filter-card');
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
}


  // courses

function scrollSlider(direction) {
    const slider = document.getElementById('categorySlider');
    const scrollAmount = slider.offsetWidth / 1.5;
    slider.scrollBy({
      left: direction * scrollAmount,
      behavior: 'smooth'
    });
  }


  // footer section
    fetch('footer.html')
    .then(res => res.text())
    .then(data => {
        document.getElementById('include-footer').innerHTML = data;
    });

    // side fixed section
    fetch('sideFixedButton.html').then(res => res.text())
    .then(data => {
        document.getElementById('include-side-fixed').innerHTML = data;
    });


    // teacher section slider 

    const track = document.getElementById("carousel-track");
    const nextBtn = document.getElementById("nextBtn");
    const prevBtn = document.getElementById("prevBtn");

    const scrollAmount = 260; // Card width + margin

    nextBtn.addEventListener("click", () => {
        track.scrollBy({ left: scrollAmount, behavior: "smooth" });
    });

    prevBtn.addEventListener("click", () => {
        track.scrollBy({ left: -scrollAmount, behavior: "smooth" });
    });

    // Auto-slide every 3 seconds
    setInterval(() => {
        track.scrollBy({ left: scrollAmount, behavior: "smooth" });

        // Optional: Reset scroll to beginning if at end (basic loop)
        if (track.scrollLeft + track.clientWidth >= track.scrollWidth) {
            track.scrollTo({ left: 0, behavior: "smooth" });
        }
    }, 3000);
