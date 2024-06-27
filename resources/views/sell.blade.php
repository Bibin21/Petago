
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
  
           <!-- user profile -->
           <i class="uil uil-user" style="color: aliceblue; font-size: 1.6rem;" ></i>
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
<form class="form first"  method="POST" action="hom.php">
  <section class="container">
      <div id="destination" class="destination">
   
      <header>SELL</header>

        <label>Category</label>
        <div class="select-box">
          <select>
            <option hidden>Select</option>
            <option>cats</option>
            <option>dogs</option>
            <option>birds</option>

            
          </select>
        </div>
        <div class="input-box">
          <label>Breed</label>
          <input type="text" name="name" id="name" placeholder="Enter Breed name" required />
        </div>
        <div class="input-box address">
          <label>Description</label>
          <input type="text" name="add1" id="add1" placeholder="Enter Description" required />
          <div class="column">
            <div class="select-box">
              <select>
                <option hidden>state</option>
                <option>Kerala</option>
                <option>Tamilnadu</option>
                
              </select>
            </div>
          </div>
        </div>

        <div class="input-box">
          <label>Price</label>
          <input type="number" name="Price" id="Price" placeholder="Enter Price" required />
        </div>
        <div class="nextbtn">
        <button name="next" onclick="nextpage()">next</button>
      </div>
      
  </div>  
      <!--Pickup-->
      <div class="pickup" id="pickup">
          <header>SELL</header>

          
                <label>Upload Image</label><br><br>
                <input type="file" name="imgfile"  required/>
             
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


    if(!allFilled){
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