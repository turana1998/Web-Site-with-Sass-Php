 <!-- Modal -->
 <div class="modal share animate__animated animate__backInDown" id="share" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">

             <div class="modal-body">
                 <button class="facebook">Facebook</button>
                 <button class="teleqram">Telegram</button>
                 <button class="instagram">Instagram</button>
                 <button class="whatsapp">Instagram</button>
             </div>

         </div>
     </div>
 </div>



 <!-- Footer section start -->
 <section id="footer">
     <div class="container">
         <div class="footer">
             <div class="row">
                 <div class="col-12 col-md-6 col-lg-3">
                     <div class="item">
                         <a href="#"><img src="./img/logo.png" /></a>
                         <p>Lazer, stomotoloji və
                             kosmetoloji məhsulların
                             satışı və servisi</p>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-3">
                     <div class="item">
                         <h5>İnformasiya</h5>
                         <ul>
                             <li><a href="#">Haqqımızda</a></li>
                             <li><a href="#">Məxfilik siyasəti</a></li>
                             <li><a href="#">Media</a></li>
                             <li><a href="#">Əlaqə</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-3">
                     <div class="item">
                         <h5>Kataloq</h5>
                         <ul>
                             <li><a href="#">Haqqımızda</a></li>
                             <li><a href="#">Məxfilik siyasəti</a></li>
                             <li><a href="#">Media</a></li>
                             <li><a href="#">Əlaqə</a></li>
                         </ul>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-3">
                     <div class="item">
                         <h5>İnformasiya</h5>
                         <div class="d-flex social">
                             <a href="#"><i class="fab fa-facebook-f"></i></a>
                             <a href="#"><i class="fab fa-instagram"></i></a>
                             <a href="#"><i class="fab fa-youtube"></i></a>
                         </div>
                         <ul>
                             <li><a href="#">Ünvan : F.İbrahimbəyov küç.19</a></li>
                             <li><a href="#">Tel : +99412 497 47 03</a></li>
                             <li><a href="#">Mob: +99450 225 99 97</a></li>
                             <li><a href="#">E-mail : info@adb.az</a></li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- Footer section end -->

 <!-- Footer Bottom section start -->
 <section id="footer_bottom">
     <div class="container">
         <p class="p-0 m-0">(c) All rights reserved - 2021</p>
     </div>
 </section>
 <!-- Footer Bottom section end -->

 </body>

 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
     integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
 </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
     integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
 </script>
 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
 <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>

 <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.css" />
 <script>
$(function() {
    let click = 0;
    $('#ChangeToggle').click(function() {
        click++;
        if (click % 2 == 1) {
            console.log(click);
            $('#open').toggleClass('d-none');
            $('#close').removeClass('d-none');
            $('#close').toggleClass('d-block');
        } else {
            console.log(click);
            $('#close').toggleClass('d-none');
            $('#open').removeClass('d-none');
            $('#open').toggleClass('d-block');
        }

    });
});
// let click = 0;
// $(".navbar-toggler").click(function() {
//     click++;
//     console.log(click);
//     if (click%2==1) {
//         console.log("a");
//         $('.navbar-toggler-icon').removeClass('navbar-toggler-icon');
//         $('.navbar-toggler').addClass('btn-close text-reset close').removeClass('navbar-toggler');
//     }
//     else{
//         console.log("b");
//         $('.navbar-toggler').removeClass('btn-close text-reset close');
//     }



// });

$('#btnFilter').click(function() {
    $(this).parents('.dropdown').find('button.dropdown-toggle').dropdown('toggle')
});
$(function() {
    $('.popup-youtube').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });
});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll('.dropdown-menu').forEach(function(element) {
        element.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    })
});
$(window).bind('scroll', function() {
    if ($(window).scrollTop() > 50) {
        $('#bottom_navbar').addClass('fixed');
    } else {
        $('#bottom_navbar').removeClass('fixed');
    }
});
$(function() {
    $('#header .slick-dots').addClass('is-style-container-50');
});

function openSearch() {
    document.getElementById("myOverlay").style.display = "block";
    console.log("kk");
}

function closeSearch() {
    document.getElementById("myOverlay").style.display = "none";
    console.log("kk");
}
$("#header .regular").slick({
    dots: true,
    infinite: true,
    speed: 500,
    arrows: false,
    fade: true,
    cssEase: "linear",
});
$(".detail .regular").slick({
    dots: true,
    infinite: true,
    speed: 500,
    prevArrow: '<button class="prev"><img src="./img/right.png"/></button>',
    nextArrow: '<button class="next"><img src="./img/leftt.png"/></button>',
    fade: true,
    cssEase: "linear",
});
$(".others .regular").slick({
    dots: false,
    infinite: true,
    speed: 500,
    prevArrow: '<button class="prev"><img src="./img/right.png"/></button>',
    nextArrow: '<button class="next"><img src="./img/leftt.png"/></button>',
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
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
                slidesToScroll: 1,
                dots: true
            },

        }
    ]
});
$("#new_arrival .regular").slick({
    infinite: false,
    speed: 300,
    prevArrow: '<button class="prev"><img src="./img/right.png"/></button>',
    nextArrow: '<button class="next"><img src="./img/left.png"/></button>',
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 730,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            },

        }
    ]
});
$("#equipment .regular").slick({
    infinite: false,
    speed: 300,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 730,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            },

        }
    ]
});
$("#_equipment .regular").slick({
    infinite: false,
    speed: 300,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 730,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            },

        }
    ]
});
$("#media .regular").slick({
    infinite: false,
    speed: 300,
    prevArrow: false,
    nextArrow: false,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: false
            }
        },
        {
            breakpoint: 730,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                dots: true
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
            },

        }
    ]
});
 </script>

 </html>