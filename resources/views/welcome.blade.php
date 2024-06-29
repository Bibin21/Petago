<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
   <title>petaGo</title>
    <!-- Custom CSS File -->

    <link rel="stylesheet" href="/Petago/public/src/output.css/>
  
    <!-- Unicons CSS -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css"/>

    <!--googlefont-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  
</head>
<body>
<div class="hd">
    <nav class="nav font-bold">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo "><h3 class="  font-bold">PetaGo</h3></a>

        <ul class="nav-links">
            <i class="uil uil-times navCloseBtn"></i>
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="./login">Login</a></li>
        </ul>

        <button>
            <i class="uil uil-user" style="color: aliceblue; font-size: 1.6rem;" ></i>
         </button>
    </nav>
</div>

<main class="main">
    <div class="flex justify-center  bg-white">
    <section class="landing_page flex items-end justify-center ">
        <div class="slides-container">
            <img src="https://supertails.com/cdn/shop/files/19TH_Apr_web_5_891415b9-06d9-4cf1-a243-75ad1b7d9355_1600x.png?v=1713507086" alt="">
          <!-- <img src="./img/group-portrait-adorable-puppies (1).jpg" alt=""> -->
          <img src="https://supertails.com/cdn/shop/files/19TH_Apr_web_5_891415b9-06d9-4cf1-a243-75ad1b7d9355_1600x.png?v=1713507086" alt="">
          <img src="          https://supertails.com/cdn/shop/files/18TH_Apr_web_1-min_732d8461-6b4b-4106-909d-dc5d563338c2_1600x.png?v=1713435210
          " alt="">
        </div>
      </section>
    </div>
   
    <section id="service"class="section1  ">

            <div class="section1_head ">
                <h1 class="">Transport Your<span class="section1_head_span">Pets</span></h1>
                <p>

                    At Petago, we ensure safe and comfortable  transport for  your <span class="section1_p_span">pets and farm animals,</span> treating them like family throughout their journey.
                </p>
                <p><i class="uil uil-check check"></i>we offers you safe transportation</p>
                <p><i class="uil uil-check check"></i>24 housr support </p>
                <p><i class="uil uil-check check"></i>you can track ypur order</p>
                <button class="section1_btn">
                   <a href="">Transport</a>
                </button>
             </div>
             <div class="section1_img ">
                 <img  class="" src="./public/WhatsApp_Image_2024-06-17_at_11.23.08_PM-removebg-preview.png"/>
             </div>
       
              
    </section>
    <section class="section2">
        <div class="section2">
             We Offers You
        </div>
        <div class="section2">
            <img src="">
        </div>
    </section>
    <!-- section 3 -->
  
    </div>
    <footer class="footer text-center">
        <h1>©️petago</h1>  
      </footer>
</main>

<script src="./index.js">
   
</script>

</body>
</html>
<script>


const nav = document.querySelector(".nav"),
  searchIcon = document.querySelector("#searchIcon"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");

searchIcon.addEventListener("click", () => {
  nav.classList.toggle("openSearch");
  nav.classList.remove("openNav");
  if (nav.classList.contains("openSearch")) {
    return searchIcon.classList.replace("uil-search", "uil-times");
  }
  searchIcon.classList.replace("uil-times", "uil-search");
});

navOpenBtn.addEventListener("click", () => {
  nav.classList.add("openNav");
  nav.classList.remove("openSearch");
  searchIcon.classList.replace("uil-times", "uil-search");
});
navCloseBtn.addEventListener("click", () => {
  nav.classList.remove("openNav");
});





////////////////////img gallery////////////////////



const carousel = document.querySelector(".carousel"),
firstImg = carousel.querySelectorAll("img")[0],
arrowIcons = document.querySelectorAll(".wrapper i");

let isDragStart = false, isDragging = false, prevPageX, prevScrollLeft, positionDiff;

const showHideIcons = () => {
    // showing and hiding prev/next icon according to carousel scroll left value
    let scrollWidth = carousel.scrollWidth - carousel.clientWidth; // getting max scrollable width
    arrowIcons[0].style.display = carousel.scrollLeft == 0 ? "none" : "block";
    arrowIcons[1].style.display = carousel.scrollLeft == scrollWidth ? "none" : "block";
}

arrowIcons.forEach(icon => {
    icon.addEventListener("click", () => {
        let firstImgWidth = firstImg.clientWidth + 14; // getting first img width & adding 14 margin value
        // if clicked icon is left, reduce width value from the carousel scroll left else add to it
        carousel.scrollLeft += icon.id == "left" ? -firstImgWidth : firstImgWidth;
        setTimeout(() => showHideIcons(), 60); // calling showHideIcons after 60ms
    });
});

const autoSlide = () => {
    // if there is no image left to scroll then return from here
    if(carousel.scrollLeft - (carousel.scrollWidth - carousel.clientWidth) > -1 || carousel.scrollLeft <= 0) return;

    positionDiff = Math.abs(positionDiff); // making positionDiff value to positive
    let firstImgWidth = firstImg.clientWidth + 14;
    // getting difference value that needs to add or reduce from carousel left to take middle img center
    let valDifference = firstImgWidth - positionDiff;

    if(carousel.scrollLeft > prevScrollLeft) { // if user is scrolling to the right
        return carousel.scrollLeft += positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
    }
    // if user is scrolling to the left
    carousel.scrollLeft -= positionDiff > firstImgWidth / 3 ? valDifference : -positionDiff;
}

const dragStart = (e) => {
    // updatating global variables value on mouse down event
    isDragStart = true;
    prevPageX = e.pageX || e.touches[0].pageX;
    prevScrollLeft = carousel.scrollLeft;
}

const dragging = (e) => {
    // scrolling images/carousel to left according to mouse pointer
    if(!isDragStart) return;
    e.preventDefault();
    isDragging = true;
    carousel.classList.add("dragging");
    positionDiff = (e.pageX || e.touches[0].pageX) - prevPageX;
    carousel.scrollLeft = prevScrollLeft - positionDiff;
    showHideIcons();
}

const dragStop = () => {
    isDragStart = false;
    carousel.classList.remove("dragging");

    if(!isDragging) return;
    isDragging = false;
    autoSlide();
}

carousel.addEventListener("mousedown", dragStart);
carousel.addEventListener("touchstart", dragStart);

document.addEventListener("mousemove", dragging);
carousel.addEventListener("touchmove", dragging);

document.addEventListener("mouseup", dragStop);
carousel.addEventListener("touchend", dragStop);

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

</script>