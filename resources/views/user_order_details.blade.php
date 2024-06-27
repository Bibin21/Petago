
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="../user_order_details_style.css" />
    
      <!-- Unicons CSS -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
     <script src="script.js" defer></script>
     <div class="hd">
      <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">website</a>
  
        <ul class="nav-links">
          <i class="uil uil-times navCloseBtn"></i>
          <li><a href="/index.html">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="/login.html">login</a></li>

        </ul>
  
         <!-- user profile -->
         <i class="uil uil-user" style="color: aliceblue; font-size: 1.6rem;" ></i>
      </nav>
  </div>



  </head>

  
 
  <body>
    
    <div class="main">


        <div class="head">

            <p class="head_1"> <span>Order Details</span></p>

            <p class="head_2">Date-Time: {{$order->created_at}}</p>

        </div>


        <ul>

            <li>

                <i class="icon uil uil-spinner"></i>

                <div class="progress one">

                    <p>1</p>

                    <i class="uil uil-check"></i>

                </div>

                <p class="text">Pending</p>

            </li>

            <li>

                <i class="icon uil uil-thumbs-up"></i>

                <div class="progress two">

                    <p>2</p>

                    <i class="uil uil-check"></i>

                </div>

                <p class="text">Order confirmed</p>

            </li>

            <li>

                <i class="icon uil uil-shopping-cart-alt"></i>

                <div class="progress three">

                    <p>3</p>

                    <i class="uil uil-check"></i>

                </div>

                <p class="text">Out for Pickup</p>

            </li>

            <li>

                <i class="icon uil uil-truck"></i>

                <div class="progress four">

                    <p>4</p>

                    <i class="uil uil-check"></i>

                </div>

                <p class="text">in Transit</p>

            </li>

            <li>

                <i class="icon uil uil-map-marker"></i>

                <div class="progress five">

                    <p>5</p>

                    <i class="uil uil-check"></i>

                </div>

                <p class="text">Attemt tp Delivery</p>

            </li>
            <li>

              <i class="icon uil uil-check"></i>

              <div class="progress six">

                  <p>6</p>

                  <i class="uil uil-check"></i>

              </div>

              <p class="text">Delivery confirmed</p>

          </li>

        </ul>


    </div>
  </body>
</html>



<script>
const nav = document.querySelector(".nav"),
  searchIcon = document.querySelector("#searchIcon"),
  navOpenBtn = document.querySelector(".navOpenBtn"),
  navCloseBtn = document.querySelector(".navCloseBtn");

// searchIcon.addEventListener("click", () => {
//   nav.classList.toggle("openSearch");
//   nav.classList.remove("openNav");
//   if (nav.classList.contains("openSearch")) {
//     return searchIcon.classList.replace("uil-search", "uil-times");
//   }
//   searchIcon.classList.replace("uil-times", "uil-search");
// });

// navOpenBtn.addEventListener("click", () => {
//   nav.classList.add("openNav");
//   nav.classList.remove("openSearch");
//   searchIcon.classList.replace("uil-times", "uil-search");
// });
// navCloseBtn.addEventListener("click", () => {
//   nav.classList.remove("openNav");
// });

    const one = document.querySelector(".one");
    
    const two = document.querySelector(".two");
    
    const three = document.querySelector(".three");
    
    const four = document.querySelector(".four");
    
    const five = document.querySelector(".five");

    const six = document.querySelector(".six");

  statusarr=Array.from([one,two,three,four,five,six]);

    </script>

    <?php
    for($i=0;$i<$order->status;$i++)
    {
      echo "<script>statusarr[$i].classList.add('active');</script>";    
    }
    
    ?>