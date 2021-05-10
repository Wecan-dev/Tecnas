function addActiveNavLink() {
  const href = window.location.href;
  const links = $(".lang-item-first .lang-item-5").get();
  const activeLink = links.find((link) => link.href === href);
  if (activeLink) {
    activeLink.classList.add("hola");
  }
}

new WOW().init();

function addActiveNavLink() {
  const href = window.location.href;
  const links = $("#navbar .nav-link").get();
  const activeLink = links.find((link) => link.href === href);
  if (activeLink) {
    activeLink.classList.add("active");
  }
}

addActiveNavLink();


$('.dropdown-menu.hoverable').hover(function() {
  // 
}, function() {
  $(this).css("display", "none")
})

$(window).on("scroll", () => {
  if ($(this).scrollTop()) {
    $(".js-gotop").fadeIn();
  } else {
    $(".js-gotop").fadeOut();
  }
});

$(".js-gotop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 1000);
});


//invocamos al objeto (window) y a su método (scroll), solo se ejecutara si el usuario hace scroll en la página
$(window).scroll(function () {
  if ($(this).scrollTop() > 70) { //condición a cumplirse cuando el usuario aya bajado 301px a más.
    $("#js_up").slideDown(300); //se muestra el botón en 300 mili segundos
  } else { // si no
    $("#js_up").slideUp(300); //se oculta el botón en 300 mili segundos
  }
});

//creamos una función accediendo a la etiqueta i en su evento click
$("#js_up i").on('click', function (e) {
  e.preventDefault(); //evita que se ejecute el tag ancla (<a href="#">valor</a>).
  $("body,html").animate({ // aplicamos la función animate a los tags body y html
    scrollTop: 0 //al colocar el valor 0 a scrollTop me volverá a la parte inicial de la página
  }, 700); //el valor 700 indica que lo ara en 700 mili segundos
  return false; //rompe el bucle
});



$(".main-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
		autoplay: true,
	autoplaySpeed: 10000,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://159.89.229.55/Tecnas/wp-content/themes/Tecnas/docs/assets/img/icons/arrow_left.svg'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://159.89.229.55/Tecnas/wp-content/themes/Tecnas/docs/assets/img/icons/arrow_right.svg'></button>",
});

$(".featured-slider").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
	autoplay: true,
	autoplaySpeed: 10000,
  arrows: true,
  dots: true,
  prevArrow:
    "<button class='slick-prev slick-arrow' aria-label='Previous' type='button'><img class='slick-prev' src='http://159.89.229.55/Tecnas/wp-content/themes/Tecnas/docs/assets/img/icons/arrow_left.svg'></button>",
  nextArrow:
    "<button class='slick-next slick-arrow' aria-label='Next' type='button'><img class='slick-next' src='http://159.89.229.55/Tecnas/wp-content/themes/Tecnas/docs/assets/img/icons/arrow_right.svg'></button>",
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".clients-slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  rows: 2,
autoplay: true,
		autoplaySpeed: 10000,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});

$(".certifications-slider").slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      },
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      },
    },
  ],
});




var sticky = document.querySelector('.navbar-bottom');

if (sticky.style.position !== 'navbar-bottom') {
  var stickyTop = sticky.offsetTop;

  document.addEventListener('scroll', function () {
    window.scrollY >= stickyTop ?
      sticky.classList.add('fixed') :
      sticky.classList.remove('fixed');
  });
}



$('.dropdown-toggle').hover(function() {
  if ($(this).siblings().hasClass("dropdown-menu")) {
    $(this).siblings().css("display", "block")
  }
}, function() {
  if ($(this).siblings().hasClass("dropdown-menu")) {
    if (!$(this).siblings().is(":hover")) {
      $(this).siblings().css("display", "none")
    }
  }
})




$('.collapse-nav-item').click(function(){	

	$('.collapse-nav-item').removeClass('show');
	$('.dropdown-menu.level-1 ').removeClass('show');


	$(this).toggleClass('show');
});

