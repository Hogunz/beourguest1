<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<title>Be our guest</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- FLOWBITE -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">    


  <style>
  /*each image is referenced twice in the HTML, but each image only needs to be updated in the CSS*/
  .image1 {
    content: url("https://randomwordgenerator.com/img/picture-generator/52e4d7434f51a914f1dc8460962e33791c3ad6e04e5074417d2c7ed09f4acc_640.jpg")
  }

  .image2 {
    content: url("https://randomwordgenerator.com/img/picture-generator/55e8d146425bb10ff3d8992cc12c30771037dbf852547848702a7fd19545_640.jpg")
  }

  .image3 {
    content: url("https://randomwordgenerator.com/img/picture-generator/55e8d24b4257ac14f1dc8460962e33791c3ad6e04e507440752972d3924cc6_640.jpg")
  }

  .image4 {
    content: url("https://randomwordgenerator.com/img/picture-generator/55e0d44b4b56a414f1dc8460962e33791c3ad6e04e5074417c2d78d2954bcd_640.jpg")
  }

  .image5 {
    content: url("https://randomwordgenerator.com/img/picture-generator/5ee3dc414954b10ff3d8992cc12c30771037dbf85254794e732f7ad7934e_640.jpg")
  }

  /*Supplier profile Review */
            .carousel-cell {
                width: 150px;
                height: 150px;
    
                margin-right: 24px;
                counter-increment: carousel-cell;
            }
    
            .carousel-cell:before {
                display: block;
                width: 20%;
            }
    
            .flickity-slider {
                position: absolute;
                width: 100%;
                height: 100%;
                left: -260px !important;
            }
    
            .flickity-button {
                position: absolute !important;
                inset: 0 !important;
                top: 50% !important;
                left: 80% !important;
                background: white;
                border: 0px;
                color: #27272a;
            }
    
            .flickity-prev-next-button:hover {
                background-color: #27272a;
                color: white;
            }
    
            .flickity-prev-next-button.previous {
                visibility: hidden;
            }
    
            .flickity-prev-next-button.next {
                margin-left: 50px;
                width: 48px;
                height: 48px;
                visibility: hidden;
            }
    
            .flickity-enabled.is-draggable .flickity-viewport {
                cursor: none;
                cursor: default;
            }
    
            .flickity-prev-next-button .flickity-button-icon {
                margin-left: 2px;
                margin-top: 2px;
                width: 24px;
                height: 24px;
            }
        
	</style>          
</head>

<body>

    <div class="flex flex-col min-h-screen bg-fixed bg-cover justify-between" style="background-image:
linear-gradient(180deg, rgba(109, 207, 246, 0.5) 0%, rgba(246, 150, 121, 0.5) 36.98%, rgba(255, 247, 153, 0.5) 66.15%, rgba(130, 202, 156, 0.2) 97.4%),
    url('https://images.unsplash.com/photo-1525373612132-b3e820b87cea?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80');
">
        <header>@include('layouts.guest-navigation')</header>
        <main>
            {{ $slot }}
        </main>
        @include('layouts.guest-footer')
    </div>
<!-- Flowbite -->
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

<!-- Carousel-->
<script>
    let defaultTransform = 0;
function goNext() {
    defaultTransform = defaultTransform - 398;
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
next.addEventListener("click", goNext);
function goPrev() {
    var slider = document.getElementById("slider");
    if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
    else defaultTransform = defaultTransform + 398;
    slider.style.transform = "translateX(" + defaultTransform + "px)";
}
prev.addEventListener("click", goPrev);

</script>
<!-- SUPPLIER --> 

<script>
    //JS to switch slides and replace text in bar//
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("description");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" opacity-100", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " opacity-100";
      captionText.innerHTML = dots[slideIndex - 1].alt;
    }
  </script>
  <!-- Supplier PROFILE REVIEW -->

<script>
  let menu = document.getElementById("menu");
let closeIcon = document.getElementById("closeIcon");
let openIcon = document.getElementById("openIcon");
const showMenu = (flag) => {
    if (flag) {
        menu.classList.toggle("hidden");
        closeIcon.classList.toggle("hidden");
        openIcon.classList.toggle("hidden");
    }
};

let menu2 = document.getElementById("menu2");
let closeIcon2 = document.getElementById("closeIcon2");
let openIcon2 = document.getElementById("openIcon2");
const showMenu2 = (flag) => {
    if (flag) {
        menu2.classList.toggle("hidden");
        closeIcon2.classList.toggle("hidden");
        openIcon2.classList.toggle("hidden");
    }
};
</script>
</body>

</html>