<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
   <title>petaGo</title>
    <!-- Custom CSS File -->
    <link rel="stylesheet" href="./src/output.css"/>

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

        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <div class="search-box">
            <i class="uil uil-search search-icon"></i>
            <input type="text" placeholder="Search here..."/>
        </div>
    </nav>
</div>

<main class="main">
    <div class="flex justify-center  bg-gray-200">
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
    <section class="transport_sell_help grid grid-cols-3 text-center mr-10 ml-10 mt-8">
        <div>
           
            <div class=" sell flex justify-center items-center flex-col">
                <h1>Sell your pets</h1>
                <img src="./img/dog_13777935.png"> 
                 <a href="./services/sell"><button class="btn">click here</button></a>
            </div>
            
          
        </div>
        <div>
           
            <div class=" transport flex justify-center items-center flex-col">
                <h1>Transport your pets</h1>
                <img src="./img/van_4634743.png"> 
                 <a href="transport"><button class="btn">click here</button></a>
            </div>
            
          
        </div>
        <div>
           
            <div class=" help flex justify-center items-center flex-col">
                <h1>Help</h1>
                <img src="./img/customer-support_2951105.png"> 
                 <a href="./services/transport"><button class="btn">click here</button></a>
            </div>
            
          
        </div>
      </section>
   
        
    <section id="services"class="section1 facility grid grid-cols-3 lg:grid-cols-6 sm:grid-cols-3 md:mr-16 md:ml-16  place-items-center  md:gap-x-4 gap-y-3">
        <!-- faci=facilitycard img -->
        <div class="cards_e bg-gray-200" >
            <button class="btn_facility ">
            <img src="./img/dogimg-removebg-preview.png" alt="dog" class="facimg_cat faci one">
            <div class=" flex flex-col  items-center justify-center"> 
           
               
                <div><h1>Dog</h1></div>
           
            </div>
            </button>
        </div>
        <div class="cards_e bg-gray-200" >
            <button class="btn_facility ">
            <img src="./img/catimg-removebg-preview.png" alt="dog" class="facimg_cat faci one">
            <div class=" flex flex-col  items-center justify-center"> 
           
               
                <div ><h1>Dog</h1></div>
           
            </div>
            </button>
        </div>
        <div class="cards_e bg-gray-200" >
            <button class="btn_facility ">
            <img src="./img/dogimg-removebg-preview.png" alt="dog" class="facimg_cat faci one">
            <div class=" flex flex-col  items-center justify-center"> 
           
               
                <div><h1>Dog</h1></div>
           
            </div>
            </button>
        </div>
        <div class="cards_e bg-gray-200" >
            <button class="btn_facility ">
            <img src="./img/catimg-removebg-preview.png" alt="dog" class="facimg_cat faci one">
            <div class=" flex flex-col  items-center justify-center"> 
           
               
                <div><h1>Dog</h1></div>
           
            </div>
            </button>
        </div>
        <div class="cards_e bg-gray-200" >
            <button class="btn_facility ">
            <img src="./img/fishimg.png" alt="dog" class="facimg_cat faci one">
            <div class=" flex flex-col  items-center justify-center"> 
           
               
                <div><h1>Dog</h1></div>
           
            </div>
            </button>
        </div>
        <div class="cards_e bg-gray-200" >
            <button class="btn_facility ">
            <img src="./img/catimg-removebg-preview.png" alt="dog" class="facimg_cat faci one">
            <div class=" flex flex-col  items-center justify-center"> 
           
               
                <div><h1>Dog</h1></div>
           
            </div>
            </button>
        </div>
        
    </section>
    <section class="sellandtransport flex justify-center text-center ">
        <div class="flex justify-center">
           
            </div>
         
    </section>
    
    

    {{-- <div class="text-center mt-10 lg:mb-5  lg:text-xl font-bold  text-gray-800">
        Recomendation for you
    </div> --}}
    {{-- <section class="section2  flex flex-col bg-gray-200 mt-10 pb-16">
      
        <div class="section2_recom">
      
       
        <div class="recom_img">
           
        <div>
            <div><img src="./h-scroll-img//images/B00LHS884Y.MAIN.webp" alt=""></div>
            <div><img src="./h-scroll-img//images/download (2).jpg" alt=""></div>
            <div><img src="./h-scroll-img//images/fluvial_bug_bites_tropical_granules_fish_food_-_45_g1.jpg "alt=""></div>
            <div><img src="./h-scroll-img//images/download (3).jpg" alt=""></div>
            <div><img src="./h-scroll-img//images/image-1.png" alt=""></div>
            <div><img src="./h-scroll-img//images/image-5.png" alt=""></div>
            <div><img src="./h-scroll-img//images/image-6.png" alt=""></div>
            <div><img src="./h-scroll-img//images/image-2.png" alt=""></div>
        </div>

        </div>
       
    </div>
    </section> --}}
    <!-- section 3 -->
   <section class="section3">
    
    <div class="btn_s3  flex justify-center items-center ">

        <a href="../dist/services/sell"> <button class="btn_section3 sell" style="color:black">+ Sell</button></a>
      
  
      
    </div>
    

    <div class=" grid grid-col-2
     lg:grid-cols-4 md:grid-cols-3  justify-items-center gap-y-5">
        
       
        <div class="cards_sell ">
            <div class="card_petsimg">
                 <img src="./imgpets/download (5).jpg" alt="">
                </div>
            <div class="card_details">
               <h2 class="prise_incard">$5010</h2>
               <p class="name_incard">Pug</p>
            </div>
        </div>
        
        <div class="cards_sell ">
            <div class="card_petsimg">
                <img src="./img/catimg.jpg" alt="">
          
            </div>
            <div class="card_details">
               <h2 class="prise_incard">$5003</h2>
               <p class="name_incard">Pug</p>
            </div>
        </div>
        
        <div class="cards_sell ">
            <div class="card_petsimg">
                 <img src="./imgpets/download (5).jpg" alt="">
            </div>
            <div class="card_details">
               <h2 class="prise_incard">$5004</h2>
               <p class="name_incard">Pug</p>
            </div>
        </div>
       
        <div class="cards_sell ">
            <div class="card_petsimg">
                 <img src="./imgpets/download (5).jpg" alt="">
            </div>
            <div class="card_details">
               <h2 class="prise_incard">$5005</h2>
               <p class="name_incard">Pug</p>
            </div>
        </div>
      
        <div class="cards_sell ">
            <div class="card_petsimg">
                 <img src="./imgpets/download (5).jpg" alt="">
            </div>
            <div class="card_details">
               <h2 class="prise_incard">$5004</h2>
               <p class="name_incard">Pug</p>
            </div>
        </div>
    </section>
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