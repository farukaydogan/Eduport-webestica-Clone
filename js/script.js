var sec1 = 0;
setInterval(function () {
    sec1++;
    sec1 <= 10 ? document.getElementById("count-1").innerHTML = sec1 : null;
}, 200);

var sec2 = 0;
setInterval(function () {
    sec2 += 20;
    sec2 <= 200 ? document.getElementById("count-2").innerHTML = sec2 : null;
}, 200);

var sec3 = 0;
setInterval(function () {
    sec3 += 6;
    sec3 <= 60 ? document.getElementById("count-3").innerHTML = sec3 : null;
}, 200);

var sec4 = 0;
setInterval(function () {
    sec4++;
    sec4 <= 6 ? document.getElementById("count-4").innerHTML = sec4 : null;
}, 200);

// counter section add count ended


//slick slider

$('.slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    // focusOnSelect: true,
    pauseOnHover: false,
    prevArrow: '<span class="sliderimSolArrowSpan"><i class="fa fa-angle-left sliderimSolArrow"></i></span>',
    nextArrow: '<span class="sliderimSagArrowSpan"><i class="fa fa-angle-right sliderimSagArrow position-absolute" style="z-index: 6;"></i></span>',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
    ]
})

// Sticky Header

$(window).scroll(function () {
    if ($(document).scrollTop() > 400) {
        $('.navbar-sticky').addClass('navbar-sticky-on');
    } else {
        $('.navbar-sticky').removeClass('navbar-sticky-on');
    }
});


// back to top
var btn = $('.back-top');
$(window).scroll(function () {
    if ($(window).scrollTop() > 300) {
        btn.addClass('back-top-show');
    } else {
        btn.removeClass('back-top-show');
    }
});

var on_top = function () {
    $('html, body').animate({scrollTop: 0}, '300');
}

// if you want to delete data-bs-toggle attribute use this
$(window).on('load', function () {
    var arrays = $(".nav-item").find("[data-bs-toggle]");
    for (const el of arrays) {
        // el.removeAttribute("data-bs-toggle");
        el.addEventListener("mouseover", function () {
            //console.log("mouseover World!");
        });
        $('.dropdown-toggle', this).trigger('click');
        el.addEventListener("click", function () {
            e.stopPropagation();
        });

        el.addEventListener("mouseleave", function () {
         //   console.log("mouseleave World!");
        });
    }

    var dropdowns = $('.dropdown ul.dropdown-menu');
    for (const drop of dropdowns) {
        drop.addEventListener("click", function (e) {
            e.stopPropagation();
        });
    }
})


// Dark mode
var j = false
$('#darkCheck').click(function () {
    if (j == false) {
        $('#darkI').html('<i class="fas fa-moon" style="position: absolute; margin-top: 4.5px; margin-left: 4px;"></i>')
        $('#darkLink').attr('href', 'css/dark-ozel.css')
        $('#altLogom').attr('src', 'https://eduport.webestica.com/assets/images/logo-light.svg')
        $('#aramaButon').css({'border-color': 'rgb(42,44,49)'})
        j = true
    } else if (j == true) {
        $('#darkI').html('<i id="darkII" class="fas fa-sun" style="position: absolute; margin-top: 4.5px; margin-left: 4px;"></i>')
        $('#darkLink').attr('href', 'css/ozel.css')
        $('#altLogom').attr('src', 'https://eduport.webestica.com/assets/images/logo.svg')
        $('#aramaButon').css({'border-color': 'rgb(221,224,227)'})
        j = false
    }
})

//glick box
const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
});

// Instead of using a selector, define the gallery elements
const myGallery = GLightbox({
    elements: [
        {
            'href': 'https://www.youtube.com/watch?v=bm3oCb1NhGc',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
        },
    ],
    autoplayVideos: true,
});

var glickbox = function () {
    myGallery.open();

}
// Instead of using a selector, define the gallery elements


// START: 24 Dark mode

document.getElementById("darkCheck").addEventListener('change', function (event) {
    if (event.target.checked) {
        document.querySelector("html").setAttribute('data-theme', 'dark')
        document.getElementById("css_href").setAttribute("href","css/dark.css");
        document.getElementById("logo").setAttribute("src","images/logo-light.svg")
        document.getElementById("logo2").setAttribute("src","images/logo-light.svg")



    } else {
        document.querySelector("html").setAttribute('data-theme',"light");
        document.getElementById("css_href").setAttribute("href","css/main.css");
        document.getElementById("logo").setAttribute("src","images/logo.svg")
        document.getElementById("logo2").setAttribute("src","images/logo.svg")

    }
});
