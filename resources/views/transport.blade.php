
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
        <a href="#" class="logo">PetaGo</a>
  
        <ul class="nav-links">
          <i class="uil uil-times navCloseBtn"></i>
          <li><a href="/">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="/user_dashboard/user_table.html">Order Details</a></li>
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
    <div class="frm">   
  <div class="row" >
        <!-- <div class="col-2">
            <h2>welcome to the website!</h2>
            <p>Success isn't always about greatness.it's about consistent hard work gians success.</p>
            <a href="" class="btn" style="color:#4a98f7;">Explore Now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="image1.png">
        </div> -->

<form class="form first"  method="POST" action="/transportinfo">
  @csrf
  <section class="container">

    <!-----  INFO-------->
    <div id="info1" class="info1">
   
        <header style="font-weight: 500;">Details</header>
        <div class="input-box">
            <div class="select-box">
              <select id="type-option" name="type" required>
                <option value="" hidden>Type</option>
                <option value="cattle">Cattle</option>
               <option value="pet">Pet</option>

              </select>
            </div>
            <br>
            <!-- <input type="text" name="Category" id="Category" placeholder="Category" required /> -->
            <label>Category</label>

            <input list="Categories" name="category" id="Category" required>

            <datalist id="Categories">
              <option value="Dog">
              <option value="Cat">
               <option value="Duck">

              <option value="Rabbit">
              <option value="Bird">
              <option value="Rat">
              <option value="Fish">

            </datalist>
            <label>Breed</label>

            <input type="text" name="breed"  />
                
                    <div class="column">
                      <label style="display: flex;align-items: center;">weight</label>

              <input type="number" name="weight" id="weight" placeholder="in kg"  required />
              <label style="display: flex;align-items: center;">height</label>

              <input type="number" name="height" id="height" placeholder="in cm" required  />
                    </div>
                    <br>
                    <label>Age</label>
               <input type="number" name="age" id="age" placeholder="in year"  required/>
               <label>Quantity</label>

              <input type="number" name="quantity" id="qty" placeholder="Quantity"  required/>
        </div>
          <div class="nextbtn">
          <button name="next" onclick="next1()">next</button>
        </div>
        
    </div>  

<!--destination-->

      <div id="destination" class="destination">
   
      <header style="font-weight: 500;">Destination</header>
      <div class="input-box">
        <label>Full Name</label>
        <input type="text" name="delivery-name" placeholder="Enter full name" required />
      </div>

    
      <div class="column">
        <div class="input-box">
          <label>Phone Number</label>
          <input type="number" name="delivery-phno" placeholder="Enter phone number"  required/>
          <label>Email ID</label>
          <input type="email" name="delivery-email" placeholder="Enter Email"  />
        </div>
        
      </div>
     
      <div class="input-box address">
        <label>Address</label>
        <input type="text" name="delivery-add1" placeholder="Enter street address"  required/>
        <input type="text" name="delivery-add2" placeholder="Enter street address line 2"  />

        <div class="column">
          <input list="states-list" id="delivery-states" onchange='selectDistricts(this.value,this.name)' type="text" name="delivery-state" placeholder="Enter State"  />
          

      
      <input list="delivery-districts" name="delivery-district" onchange="selectLocations(this.value,this.name)"  id="District"  placeholder="District" required>
      <datalist id="delivery-districts">
        {{-- <option value="Thiruvananthapuram">
        <option value="Kollam">
         <option value="Pathanamthitta">
        <option value="Alappuzha">
        <option value="Kottayam">
        <option value="Idukki">
        <option value="Ernakulam">
          <option value="Thrissur">
             <option value="Palakkad">
            <option value="Malappuram">
            <option value="Kozhikode">
            <option value="Wayanad">
            <option value="Kannur">
              <option value="Kasaragod"> --}}

                

      </datalist>
        </div>   <br>               
        
        <label >Select Destination</label>

          
        <div class="select-box" required>
          <select id="delivery-location" name="delivery-loc" required>
            <option hidden value="">Select Nearest Location</option>
            {{-- <option value="mallapally">thiruvalla</option>
            <option value="mallapally">mallappally</option>
            <option value="chengannur">chengannur</option> --}}
          </select>
        </div>
      </div>
        <div class="submitbtn">
          <button name="submit">submit</button>
        </div>
      <div class="backbtn">
        <button name="back"  onclick="prepage2()">back</button>
      </div>
      
  </div>  
      <!--Pickup-->
      <div class="pickup" id="pickup">
          <header style="font-weight: 500;">Pickup</header>
            <div class="input-box">
              <label>Full Name</label>
              <input type="text" name="pickup-name" placeholder="Enter full name" required />
            </div>
    
          
            <div class="column">
              <div class="input-box">
                <label>Phone Number</label>
                <input type="number" name="pickup-phno" placeholder="Enter phone number" required />
                <label>Email ID</label>
                <input type="email" name="pickup-email" placeholder="Enter Email" required />
              </div>
              
            </div>
           
            <div class="input-box address">
              <label>Address</label>
              <input type="text" name="pickup-add1" placeholder="Enter street address"  required/>
              <input type="text" name="pickup-add2" placeholder="Enter street address line 2"  />

              <div class="column">
                <input list="states-list" id="pickup-states" onchange='selectDistricts(this.value,this.name)' type="text" name="pickup-state" placeholder="Enter State" />
           

            <datalist id="states-list">
              {{-- <option value="Thiruvananthapuram">
              <option value="Kollam">
               <option value="Pathanamthitta">
              <option value="Alappuzha">
              <option value="Kottayam">
              <option value="Idukki">
              <option value="Ernakulam">
                <option value="Thrissur">
                   <option value="Palakkad">
                  <option value="Malappuram">
                  <option value="Kozhikode">
                  <option value="Wayanad">
                  <option value="Kannur">
                    <option value="Kasaragod"> --}}

                      

            </datalist>
            <input list="pickup-districts" onchange='selectLocations(this.value,this.name)' name="pickup-district" id="District"  placeholder="District" required>
            <datalist id="pickup-districts">
              {{-- <option value="Thiruvananthapuram">
              <option value="Kollam">
               <option value="Pathanamthitta">
              <option value="Alappuzha">
              <option value="Kottayam">
              <option value="Idukki">
              <option value="Ernakulam">
                <option value="Thrissur">
                   <option value="Palakkad">
                  <option value="Malappuram">
                  <option value="Kozhikode">
                  <option value="Wayanad">
                  <option value="Kannur">
                    <option value="Kasaragod"> --}}

                      

            </datalist>
              </div>   <br>               
              
              <label >Choose Pickup Location</label>

                <div class="select-box" required>
                <select id="pickup-location" required name="pickup-loc">
                  <option hidden value="">Select Nearest Location</option>
            
                  {{-- <option value="mallapally">thiruvalla</option>
                  <option value="mallapally">mallappally</option>
                  <option value="chengannur">chengannur</option> --}} --}}
                </select>
              </div>
            </div>
            <div class="nextbtn">
              <button name="next" onclick="nextpage()">next</button>
            </div>

            <div class="backbtn">
              <button name="back"  onclick="prepage1()">back</button>
            </div>
         
      </div>  
    </section>

 </form>



    </div>         

  </div>
  <script>

function next1(){
  let inputs = document.querySelectorAll('.info1 input');
  let options = document.getElementById('type-option');
   
    let allFilled = Array.from([inputs[0],inputs[2],inputs[3],inputs[4],inputs[5]]).every(input => input.value !== '');
    if(options.value=="")
    allFilled=false;


    if(allFilled){
        document.getElementById('info1').style.display="none";
      document.getElementById('pickup').style.display="block";
      document.getElementById('destination').style.display="none";
    }
}
function nextpage(){
  let inputs = document.querySelectorAll('.pickup input');
  let options = document.getElementById('pickup-location');
    let allFilled = Array.from(inputs).every(input => input.value !== '');
    if(options.value=="")
    allFilled=false;


    if(allFilled){
        document.getElementById('info1').style.display="none";
      document.getElementById('pickup').style.display="none";
      document.getElementById('destination').style.display="block";
    }
}
function prepage1(){
    document.getElementById('info1').style.display="block";
      document.getElementById('pickup').style.display="none";
      document.getElementById('destination').style.display="none";
    }
function prepage2(){
    document.getElementById('info1').style.display="none";
      document.getElementById('pickup').style.display="block";
      document.getElementById('destination').style.display="none";
    }
    var districts;
    var states;
 var locations;
function fetchState(){
  fetch("js/states.json")
                .then((res) => {
                    if (!res.ok) {
                        throw new Error
                            (`Data Unavailable`);
                    }
                    return res.json();
                })
                .then((data) => 
                      {
                        states=data;
data.states.forEach(element => {
  let dataList=document.getElementById("states-list");
//  let dataList1=document.getElementById("delivery-states");
  let option = document.createElement('option');
    
    option.value = element;
    option.text = element;
    dataList.appendChild(option);

    
});

                      })
                .catch((error) => 
                       console.error("Unable to fetch data:", error));
}
 function selectDistricts(selected_state,type){
let count=0;
let flag=0;
let index=0;
let dataList;
 states.states.forEach(state=>{
  // console.log(state);
  // console.log(selected_state);
  
  if(state==selected_state)
  {
  index=count;
flag=1;
  }
  count++;

 });
 if(type=="pickup-state")
  dataList=document.getElementById("pickup-districts");
  else
   dataList=document.getElementById("delivery-districts");
dataList.innerHTML='';
//  console.log(index)
 if(flag==1)
 {

(districts.states[index].districts).forEach(district=>{
  // console.log(district);

 let option = document.createElement('option');
    
    option.value = district;
    option.text = district;

    dataList.appendChild(option);


})};
 };


function selectLocations(selected_district,type){
let count=0;
let flag=0;
let index=0;
let dataList;
// console.log(selected_district);
// console.log(type);
if(type=="pickup-district")
  dataList=document.getElementById("pickup-location");
  else
   dataList=document.getElementById("delivery-location");
dataList.innerHTML='';
let option = document.createElement('option');
      option.value = "";
    option.text = "Select Nearest Location";
    option.setAttribute("hidden", "hidden");
dataList.appendChild(option);
 locations.locations.forEach(loc=>{
  // console.log(state);
  // console.log(selected_state);
  
  if(loc.district==selected_district)
  {
  index=count;
flag=1;

    loc.locations.forEach(element =>{
      let option = document.createElement('option');
      option.value = element;
    option.text = element;

    dataList.appendChild(option);
    })

}

count++;}
)
if(flag==0)
{
  dataList.innerHTML='';
  let option = document.createElement('option');
      option.value = "";
    option.text = "No Locations for this district";

    dataList.appendChild(option);
}
};
  



        function fetchDistrict() {
            fetch("js/district.json")
                .then((res) => {
                    if (!res.ok) {
                        throw new Error
                            (`Data Unavailable`);
                    }
                    return res.json();
                })
                .then((data) => 
                      {
                        // console.log(data);
                   districts=data;

                      })
                .catch((error) => 
                
                       console.error("Unable to fetch data:", error));
        }
        function fetchLocations() {
            fetch("js/locations.json")
                .then((res) => {
                    if (!res.ok) {
                        throw new Error
                            (`Data Unavailable`);
                    }
                    return res.json();
                })
                .then((data) => 
                      {
                       
                   locations=data;

                      })
                .catch((error) => 
                
                       console.error("Unable to fetch data:", error));
        }
        fetchState();
        fetchDistrict();
        fetchLocations();
  

  </script>
  <script src="script.js"></script>

  </body>
</html>