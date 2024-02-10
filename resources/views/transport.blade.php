
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="css/style1.css" />
    
      <!-- Unicons CSS -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
     <script src="js/script.js" defer></script>
     <div class="hd">
      <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">website</a>
  
        <ul class="nav-links">
          <i class="uil uil-times navCloseBtn"></i>
          <li><a href="/">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">Products</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">login</a></li>

        </ul>
  
        <i class="uil uil-search search-icon" id="searchIcon"></i>
        <div class="search-box">
          <i class="uil uil-search search-icon"></i>
          <input type="text" placeholder="Search here..." />
        </div>
      </nav>
  </div>



  </head>

  
 
  <body>
    
    <div class="frm">   
      <div class="row">
        <!-- <div class="col-2">
            <h2>welcome to the website!</h2>
            <p>Success isn't always about greatness.it's about consistent hard work gians success.</p>
            <a href="" class="btn" style="color:#4a98f7;">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="image1.png">
        </div> -->

<!--destination-->
<form class="form first"  method="POST" action="/transportinfo">
    @csrf
  <section class="container">
      <div id="destination" class="destination">
      <header>Destination</header>
        <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="name" id="name" placeholder="Enter full name" required />
        </div>

        <div class="input-box">
          <label>Email Address</label>
          <input type="text" name="email" id="email" placeholder="Enter email address" required />
        </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="phno" id="phno" placeholder="Enter phone number" required />
          </div>
          
        </div>
       
        <div class="input-box address">
          <label>Address</label>
          <input type="text" name="add1" id="add1" placeholder="Enter street address" required />
          <input type="text" name="add2"  placeholder="Enter street address line 2" required />
          <div class="column">
            <div class="select-box">
              <select name="country">
                <option value="none" hidden>Country</option>
                <option value="America">America</option>
                <option value="India">India</option>
                
              </select>
            </div>
            <input type="text" name="city" id="city" placeholder="Enter your city" required />
          </div>
          <div class="column">
            <input type="text" name="reg" id="region" placeholder="Enter your region" required />
            <input type="number" name="postal" id="pincode" placeholder="Enter postal code" required />
          </div>
        </div>
        <div class="nextbtn">
        <button name="next" onclick="nextpage()">next</button>
      </div>
      
  </div>  
      <!--Pickup-->
      <div class="pickup" id="pickup">
          <header>Pickup</header>
            <div class="input-box">
              <label>Full Name</label>
              <input type="text" name="p_name" placeholder="Enter full name" required />
            </div>
    
          
            <div class="column">
              <div class="input-box">
                <label>Phone Number</label>
                <input type="number" name="p_phno" placeholder="Enter phone number" required />
              </div>
              
            </div>
           
            <div class="input-box address">
              <label>Address</label>
              <input type="text" name="p_add1" placeholder="Enter street address" required />
              <input type="text" name="p_add2" placeholder="Enter street address line 2" required />
              <div class="column">
                <div class="select-box">
                  <select name="p_country">
                    <option value="none" hidden>Country</option>
                    <option value="America">America</option>
                    <option value="India">India</option>
                    
                  </select>
                </div>
                <input type="text" name="p_city" placeholder="Enter your city" required />
              </div>
              <div class="column">
                <input type="text" name="p_reg" placeholder="Enter your region" required />
                <input type="number" name="p_postal" placeholder="Enter postal code" required />
              </div>
            </div>
            <div class="submitbtn">
              <button name="submit">submit</button>
            </div>
            <div class="backbtn">
              <button name="back"  onclick="prepage()">back</button>
            </div>
         
      </div>  
    </section>

 </form>



    </div>         

  </div>
  <script>
function nextpage(){
  let inputs = document.querySelectorAll('.destination input');
    let allFilled = Array.from(inputs).every(input => input.value !== '');


    if(allFilled){
      document.getElementById('destination').style.display="none";
      document.getElementById('pickup').style.display="block";
    }
}
function prepage(){

      document.getElementById('destination').style.display="block";
      document.getElementById('pickup').style.display="none";
    }



  </script>
  <script src="script.js"></script>

  </body>
</html>