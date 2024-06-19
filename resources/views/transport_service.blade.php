
<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
 
    <link rel="stylesheet" href="css/datatable.css" />
    <script src="hscript.js" defer></script>
      <!-- Unicons CSS -->
      <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

     <div class="hd">
      <nav class="nav">
        <i class="uil uil-bars navOpenBtn"></i>
        <a href="#" class="logo">website</a>
  
        <ul class="nav-links" >
          <div class="togg">

              
            <a href="#" onclick="newfuntion()">
                <span class="text" style="color:white" >Pending</span>

            </a>
      
    </div>
    <div class="ver"></div>

    <div class="togg">

   
      <a href="#" onclick="pendingfuntion()">
        <span class="text"  style="color:white">Confirmed</span>

            </a>
     
    </div>    
    <div class="ver"></div>

    
    <div class="togg">

  
      <a href="#" onclick="inprogressfuntion()">
        <span class="text" style="color:white" >In progress</span>

            </a>
     
        </div>   
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
  
    <div class="modal">
        <div class="modal-content">
            <span class="close-button">×</span>
  
          <h1 >
        <?php  
      if(isset($error))
         echo "$error";
    
    ?>
        </h1>
        <div id="modal-footer" >

        </div>
        </div>
    </div>
{{-- 
    <div class="flt_navigat">
    <div class="floating_navigationbar">   
      

     
                <div class="togg">

              
                    <a href="#" onclick="newfuntion()">
                        <span class="text" >New</span>

                    </a>
              
            </div>
            <div class="ver"></div>

            <div class="togg">

           
              <a href="#" onclick="pendingfuntion()">
                <span class="text" >Pending</span>

                    </a>
             
            </div>    
            <div class="ver"></div>

            
            <div class="togg">

          
              <a href="#" onclick="inprogressfuntion()">
                <span class="text" >In progress</span>

                    </a>
             
                </div>   

  </div>

</div> --}}
<div class="newdata" id="newdata">
{{-- <div class="alllist" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">

<div class="start_end" style="background:rgb(99, 99, 153);color:white; display: flex; justify-content: space-between;margin-top: 50px;width: 70%;border-radius: 4px;padding: 5px;">
  <p>Ernakulam to Kollam</p>
  <button onclick="myFunction(event)" style="width: 30px;"> &darr;</button>
</div>
<div id="myDropdown2" class="myDropdown2" style="display: none; background:rgb(224, 222, 222);margin-top: 10px;width: 80%;border-radius:5px;padding: 5px;">
  <p>Lorem ipsum dolor sit amet,  dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
  <button  style="width:50px;"> Book</button>

</div>


<div class="start_end" style="background:rgb(99, 99, 153);color:white; display: flex; justify-content: space-between;margin-top: 20px;width: 70%;border-radius: 4px;padding: 5px;">
  <p> Kollam to Ernakulam </p>
  <button onclick="myFunction(event)" style="width: 30px;"> &darr;</button>
</div>
<div id="myDropdown3" class="myDropdown2" style="display: none;  background:rgb(224, 222, 222);margin-top: 10px;width: 80%;border-radius:5px;padding: 5px;">
  <p>Lorem ipsum dolor sit amet, c dolor sit amet amet, consectetuempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
  <button  style="width:50px;"> Book</button>

</div>

<div class="start_end" style="background:rgb(99, 99, 153);color:white; display: flex; justify-content: space-between;margin-top: 20px;width: 70%;border-radius: 4px;padding: 5px;">
  <p>Allapuzha to kannur</p>
  <button onclick="myFunction(event)" style="width: 30px;"> &darr;</button>
</div>
<div id="myDropdown4" class="myDropdown2" style="display: none;  background:rgb(224, 222, 222);margin-top: 10px;width: 80%;border-radius:5px;padding: 5px;">
  <p>Lorem ipsum dolor sit amet, c dolor sit amet amet, consecteture et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
  <button  style="width:50px;"> Book</button>

</div>

</div> --}}
<div  >
  <main class="table">
    <section class="table__header" style=" background-color: lightblue;">
        <h1>Pending</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
        </div>
        <div class="export__file">
            <label for="export-file" class="export__file-btn" title="Export File"></label>
            
        </div>
  <div class="btn">  				

          <button type="button" name="submitpage" class="btn">button</button>
          </div>
    </section>
    <section class="table__body">
<div class="card-body">
<div class="table-responsive">
<table>

  <thead>

    <th></th>
    <th>ID</th>
    
    <th>P-Location</th>
    <th>D-Location</th>
    <th>Type</th>
    <th>Category</th>
    <th>Breed</th>
    <th>age</th>
  </thead>
  <tbody>
    @isset($pending)
    @foreach($pending as $entry)
    <form action="/transportconfirm" method="POST">
        @csrf
        <input type="number" name="id" hidden value="{{$entry->id}}" >
    <tr>
    <td><button class="confirm" >Confirm</button></td>
    <td>{{ $entry->id }}</td>
        <td>{{ $entry->p_location }}</td>
        <td>{{ $entry->d_location}}</td>
        <td>{{ $entry->type}}</td>
        <td>{{ $entry->category}}</td>
        <td>{{ $entry->breed}}</td>
        <td>{{ $entry->age}}</td>
</tr>
</form>
@endforeach
@endisset
  </tbody>
</table>			
</div>
</div>

    </section>
</main>
  

</div>
</div>


<div class="pendingdata" id="pendingdata" style="display: none;">
  <div class="alllist" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
  
  {{-- <div class="start_end" style="background:rgb(99, 99, 153);color:white; display: flex; justify-content: space-between;margin-top: 50px;width: 70%;border-radius: 4px;padding: 5px;">
    <p>Ernakulam to Trivandrum</p>
    <button onclick="myFunction(event)" style="width: 30px;"> &darr;</button>
  </div>
  <div id="myDropdown5" class="myDropdown5" style="display: none; background:rgb(224, 222, 222);margin-top: 10px;width: 80%;border-radius:5px;padding: 5px;">
    <p>Lorem ipsum dolor sit amet,  dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, </p>
    <button  style="width:50px;"> Book</button>
  
  </div>
   --}}
  
   <main class="table">
    <section class="table__header" style=" background-color: lightblue;">
        <h1>Confirmed</h1>
        <div class="input-group">
            <input type="search" placeholder="Search Data...">
        </div>
        <div class="export__file">
            <label for="export-file" class="export__file-btn" title="Export File"></label>
            
        </div>
  <div class="btn">  				

          <button type="button" name="submitpage" class="btn">button</button>
          </div>
    </section>
    <section class="table__body">
<div class="card-body">
<div class="table-responsive">
<table>
  <thead>
    <th></th>
    <th>ID</th>
    <th>Type</th>
    <th>Category</th>
    <th>Breed</th>
    <th>P-Name</th>
    <th>P-Phone</th>
    <th>P-Location</th>
    <th>P-District</th>
    {{-- <th>D-Name</th>
    <th>D-Phone</th>
    <th>D-Location</th>
    <th>D-District</th> --}}

  </thead>
  <tbody>
    @isset($confirmed)
    @foreach($confirmed as $entry)
    <form action="/transportnext" method="POST">
        @csrf
        <input type="number" name="id" hidden value="{{$entry->id}}" >
    <tr>
      <?php
      if($entry->status==2)
     echo "<td ><button class='confirm' >Pickup</button></td>";
    else if($entry->status==3)
    echo "<td ><button class='confirm' >Transit</button></td>";
      ?>
      <td>{{ $entry->id}}</td> 
      <td>{{ $entry->type}}</td>
      <td>{{ $entry->category}}</td>
      <td>{{ $entry->breed}}</td>
      <td>{{ $entry->p_name}}</td> 
      <td>{{ $entry->p_phone}}</td>
      <td>{{ $entry->p_location}}</td>
      <td>{{ $entry->p_district}}</td>
        {{-- <td>{{ $entry->d_name }}</td>
        <td>{{ $entry->d_phone}}</td>
        <td>{{ $entry->d_location}}</td>
        <td>{{ $entry->d_district}}</td> --}}
       
    

       
</tr>
</form>
@endforeach
@endisset
  </tbody>
</table>			
</div>
</div>

    </section>
</main>
  
  </div>
  
  </div>

  <div class="inprogress" id="inprogressdata" style="display: none;">
    <div class="alllist" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
    
      <main class="table">
        <section class="table__header" style=" background-color: lightblue;">
            <h1>In Progress</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
            </div>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"></label>
                
            </div>
      <div class="btn">  				
    
              <button type="button" name="submitpage" class="btn">button</button>
              </div>
        </section>
        <section class="table__body">
    <div class="card-body">
    <div class="table-responsive">
    <table>
      <thead>
        <th></th>
        <th>ID</th>
        <th>Type</th>
    <th>Category</th>
    <th>Breed</th>
    <th>D-Name</th>
    <th>D-Phone</th>
    <th>D-Location</th>
    <th>D-District</th>
      </thead>
      <tbody>
        @isset($inprogress)
        @foreach($inprogress as $entry)
        <form action="/transportnext" method="POST">
            @csrf
            <input type="number" name="id" hidden value="{{$entry->id}}" >
        <tr>
          <?php
          if($entry->status==4)
         echo "<td ><button class='confirm' >Delivery</button></td>";
        else if($entry->status==5)
        echo "<td ><button class='confirm' >Finish</button></td>";
          ?>
          <td>{{ $entry->id}}</td> 
          <td>{{ $entry->type}}</td>
          <td>{{ $entry->category}}</td>
          <td>{{ $entry->breed}}</td>
            <td>{{ $entry->d_name }}</td>
            <td>{{ $entry->d_phone}}</td>
            <td>{{ $entry->d_location}}</td>
            <td>{{ $entry->d_district}}</td>
           
    
           
    </tr>
    </form>
    @endforeach
    @endisset
      </tbody>
    </table>	
    
    </div>
    
    </div>

  <script>


function newfuntion() {
  var a = document.getElementById('newdata');
  var b = document.getElementById('pendingdata');
  var c = document.getElementById('inprogressdata');


  if (a.style.display === "none") {
    a.style.display = "block";
    b.style.display = "none";
    c.style.display = "none";


  } 

}
function pendingfuntion() {

  var a = document.getElementById('newdata');
  var b = document.getElementById('pendingdata');
  var c = document.getElementById('inprogressdata');
  if (b.style.display === "none") {
    a.style.display = "none";
    b.style.display = "block";
    c.style.display = "none";
  }

}
function inprogressfuntion() {

  var a = document.getElementById('newdata');
  var b = document.getElementById('pendingdata');
  var c = document.getElementById('inprogressdata');

if (c.style.display === "none") {
  a.style.display = "none";
    b.style.display = "none";
    c.style.display = "block";

} 
}


function myFunction(event) {
  var x = event.target.parentElement.nextElementSibling;
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }

}

  </script>
  <script>

    var modal = document.querySelector(".modal");
    var trigger = document.querySelector(".trigger");
    var closeButton = document.querySelector(".close-button");
    
    function toggleModal() {
        modal.classList.toggle("show-modal");
    }
    
    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }
    
    
    closeButton.addEventListener("click", toggleModal);
    window.addEventListener("click", windowOnClick);

    </script>
    <?php
    if(isset($error))
    {
    if($error!="")
    {
      if($error=="Not Signed in")
      {
        echo "
         <script> var a = document.createElement('a');
    var linkText = document.createTextNode('Click Here to Login');
      a.appendChild(linkText);
      a.title = 'Click Here to Login';
      a.href = '/transportlogin';
      a.style.color='black';
    document.getElementById('modal-footer').appendChild(a);
     </script> " ;
      }
   
        echo '<script>
    toggleModal();
</script>';
      
    }
    }
?>

<style>
    .confirm{
        background: rgb(52, 157, 52);
        color:whitesmoke;

    }
button:hover{
background: white;
color: black;

}
.trigger{
      text-align: center;
    padding: 7px 13px;
    background: #3e3e3e;
    color: #fff;
    font-size: 15px;
    outline: none;
    border: none;
    border-radius: 5px;
    font-family: cursive;
}

.modal {
    position: fixed;
    left: 0;
    z-index:10;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.close-button:hover {
    background-color: darkgray;
}

.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}


</style>


  </body>
</html>

<script>


  const search = document.querySelector('.input-group input'),
      table_rows = document.querySelectorAll('tbody tr'),
      table_headings = document.querySelectorAll('thead th');
  
  // 1. Searching for specific data of HTML table
  search.addEventListener('input', searchTable);
  
  function searchTable() {
      table_rows.forEach((row, i) => {
          let table_data = row.textContent.toLowerCase(),
              search_data = search.value.toLowerCase();
  
          row.classList.toggle('hide', table_data.indexOf(search_data) < 0);
          row.style.setProperty('--delay', i / 25 + 's');
      })
  
      document.querySelectorAll('tbody tr:not(.hide)').forEach((visible_row, i) => {
          visible_row.style.backgroundColor = (i % 2 == 0) ? 'transparent' : '#0000000b';
      });
  }
  </script>

  <style>

    /* Import Google font - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

/* Google Fonts - Poppins */
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
.hd {
  background: #f0faff;
  height: 70px;
}


.nav {
  z-index: 100;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  padding: 15px 200px;
  background: #02083E;;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}
.nav,
.nav .nav-links {
  display: flex;
  align-items: center;
}
.nav {
  justify-content: space-between;
}
a {
  color: #fff;
  text-decoration: none;
}
.nav .logo {
  font-size: 22px;
  font-weight: 500;
}
.nav .nav-links {
  column-gap: 20px;
  list-style: none;
}
.nav .nav-links a {
  transition: all 0.2s linear;
}
.nav.openSearch .nav-links a {
  opacity: 0;
  pointer-events: none;
}
.nav .search-icon {
  color: #fff;
  font-size: 20px;
  cursor: pointer;
}
.nav .search-box {
  position: absolute;
  right: 250px;
  height: 45px;
  max-width: 555px;
  width: 100%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.2s linear;
}
.nav.openSearch .search-box {
  opacity: 1;
  pointer-events: auto;
}
.search-box .search-icon {
  position: absolute;
  left: 15px;
  top: 50%;
  left: 15px;
  color: #4a98f7;
  transform: translateY(-50%);
}
.search-box input {
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  border-radius: 6px;
  background-color: #fff;
  padding: 0 15px 0 45px;
}

.nav .navOpenBtn,
.nav .navCloseBtn {
  display: none;
}

.allcate{
 display: flex;
 box-shadow: 0 0 12px grey;
 padding: 10px;

}
.categories{
  align-self: center;
  width: 95%;
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  column-gap: 20px;
}
.btn1{
  margin-right: 100px;
}

.btn1 button {
  font-size: 12px;
  padding: 0.5em 2em;
  border: transparent;
  color: rgb(0, 0, 0);
  border: 2px solid #000000;
  background: white;
  border-radius: 0.75em;
 }
 
 .btn1:hover {
  transform: scale(1.02);
 }
 
.dropdown{
  display: none;
}


.nav-lin{
  margin: 10px 0px 10px 0px;
  color: rgb(0, 0, 0);
  font-weight: 300;
  box-shadow: 0 0 2px grey;
  padding: 10px;
  border-radius: 5px;
  text-align: center;
  background-color: rgb(126, 203, 247);
  color: white;
  min-width: 100px;
}


.trn{
  margin-top: 10px;
  padding: 10px 110px 10px 110px;
  display: flex;
  justify-content: center;
}
.tds{
  width: 70%;
  border: 3px solid black;
  height: 150px;
  border-radius: 15px;
    display: flex;
  justify-content: center;
  align-items: center;
  background-image: url("https://i.pinimg.com/736x/dd/a9/a8/dda9a8c4c33b4223ae431a0f1e119f31.jpg");
  box-shadow: 10px 10px;

}
.tran {
  color: #000000;
}




/* responsive */
@media screen and (max-width: 670px) {
 .categories{
  display: none;
 }

 .trn{
  margin-top: 10%;
  margin-bottom: 5%;
  padding: 4px 25px 4px 25px;
  display: flex;
  justify-content: center;  


}
.tds{
  width: 100%;
}

 .allcate{
  display: flex;
  justify-content: flex-end;
}

.btn1{
  margin-right: 50px;
}
 .dropdown{
  display: block;
 }
 /* Dropdown Button */
.dropbtn {
  background-color: rgb(126, 203, 247);
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
}

.btn1 button {

  margin-left: 50%;

}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  padding: 10px;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}


}
@media screen and (max-width: 1160px) {
  .nav {
    padding: 15px 100px;
  }
  .nav .search-box {
    right: 150px;
  }
}
@media screen and (max-width: 950px) {


  .trn{
    margin-top: 10%;
    margin-bottom: 5%;
    padding: 4px 25px 4px 25px;
    display: flex;
    justify-content: center;
  }
  .tds{
    width: 90%;
  }
  .nav {
    padding: 15px 50px;
  }
  .nav .search-box {
    right: 100px;
    max-width: 400px;
  }
}
@media screen and (max-width: 768px) {

  
  .nav .navOpenBtn,
  .nav .navCloseBtn {
    display: block;
  }
  .nav {
    padding: 15px 20px;
  }
  .nav .nav-links {
    position: fixed;
    top: 0;
    left: -100%;
    height: 100%;
    max-width: 280px;
    width: 100%;
    padding-top: 100px;
    row-gap: 30px;
    flex-direction: column;
    background-color: #11101d;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
    z-index: 100;
  }
  .nav.openNav .nav-links {
    left: 0;
  }
  .nav .navOpenBtn {
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .navCloseBtn {
    position: absolute;
    top: 20px;
    right: 20px;
    color: #fff;
    font-size: 20px;
    cursor: pointer;
  }
  .nav .search-box {
    top: calc(100% + 10px);
    max-width: calc(100% - 20px);
    right: 50%;
    transform: translateX(50%);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  }
}

.row{
  display: flex;
  align-items: center;
  flex-wrap: wrap;
  justify-content: space-around;
}
.col-2{
  flex-basis: 30%;
  min-width: 100px;
}
.col-2 img{
  width: 100%;
  padding: 50px 0;
}
.mads{
  background-color: black;
  color:white ;
  font-size: larger;
  opacity: .8;
}

.allbody {
  padding: 100px;

}


.addbody{
  display: flex;
  align-items: center;
  justify-content: center;
}






.wrapper{
  display: flex;
  max-width: 1200px;
  position: relative;
}
.wrapper i{
  top: 50%;
  height: 44px;
  width: 44px;
  color: #ffffff;
  cursor: pointer;
  font-size: 1.15rem;
  position: absolute;
  text-align: center;
  line-height: 44px;
  background: #bebebe;
  border-radius: 50%;
  transform: translateY(-50%);
  transition: transform 0.1s linear;
}
.wrapper i:active{
  transform: translateY(-50%) scale(0.9);
}
.wrapper i:hover{
  background: #f2f2f2;
}
.wrapper i:first-child{
  left: -22px;
  display: none;
}
.wrapper i:last-child{
  right: -22px;
}
.wrapper .carousel{
  font-size: 0px;
  cursor: pointer;
  overflow: hidden;
  white-space: nowrap;
  scroll-behavior: smooth;
}
.carousel.dragging{
  cursor: grab;
  scroll-behavior: auto;
}
.carousel.dragging img{
  pointer-events: none;
}
.carousel img{
  height: 340px;
  object-fit: cover;
  user-select: none;
  margin-left: 14px;
  width: calc(100% / 3);
}
.carousel img:first-child{
  margin-left: 0px;
}
@media screen and (max-width: 900px) {
  .carousel img{
    width: calc(100% / 2);
  }
}
@media screen and (max-width: 550px) {
  .carousel img{
    width: 100%;
  }
  .wrapper{
   max-width: 60%;
  }
}






.reco{

  font-size: larger;
  font-weight: 300;
  text-align: center;
  margin-bottom: 20px ;
}
.pdts{

  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  row-gap: 100px;
  flex-wrap: wrap;
  column-gap: 40px;
  margin-top: 30px;
}


.card1 {
  position: relative;
  width: 300px;
  height: 400px;
  box-shadow: 0px 1px 13px rgba(0,0,0,0.1);
  cursor: pointer;
  transition: all 700ms;
  display: flex;
  flex-direction: column;
  background: #fff;

}

.des{
padding: 10px  10px 10px 10px;
}

.card1 .title1 {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 0.9em;
  left: 0.625em;
  bottom: 1.875em;
  margin-top: 5px;
}
.card1 .price{
  font-weight: 600;

  font-size: larger;
}


.card1 :hover {
 transform: scale(1.01);
}



.image1 {
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);

  width: 100%;
  height: 100%;
  display: grid;
  padding: 0.5em;
  place-items: center;
}


.button{
  /* border: 2px solid black; */
  display: flex;
  justify-content: center;
  margin-top: 2%;
 
}
.button button{
  background-color: white;
  height: 45px;
  width: 100px;
  font-weight: bold;
  font-family: 'Roboto', sans-serif;
  color: #002f34;
  font-size: 16px;
  border-color: #002f34;
  border-radius: 5px;
}
.button button:hover{
  border: 4px solid #002f34;
}


@media screen and (max-width: 500px) {
  .allbody {
    padding: 10px;
  
  }
}








.footer{
  background: #292929;
  color: #8a8a8a;
  font-size: 14px;
  padding: 60px 0 20px;
}
.footer p{
  color:#8a8a8a;
}
.footer h3{
  color:#fff;
  margin-bottom: 20px;
}
.footer-col-1,.footer-col-2,.footer-col-3,.footer-col-4{
  min-width: 250px;
  margin-bottom: 20px;
}
.footer-col-1{
  flex-basis: 30%;
}
.footer-col-2{
  flex:1;
  text-align: center;
}
.footer-col-2 img{
  width: 180px;
  margin-bottom: 20px;
}
.footer-col-3,.footer-col-4{
  flex-basis: 12%;
  text-align: center;
}
ul{
  list-style-type: none;
}
.app-logo{
  margin-top: 20px;
}
.app-logo img{
  width: 140px;
}
.container hr{
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
}
.menu-icon{
  width: 28px;
  margin-left: 20px;
  display: none;
}
.contain hr{
  border: none;
  background: #b5b5b5;
  height: 1px;
  margin: 20px 0;
  width: 100%;
}



.container {
  position: relative;
  max-width: 700px;
  width: 100%;
  background: #ffff;
  padding: 25px;
  border-radius: 8px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
}
.container header {
  font-size: 1.5rem;
  color: #333;
  font-weight: 500;
  text-align: center;
}
.container .form {
  margin-top: 30px;
}
.form .input-box {
  width: 100%;
  margin-top: 20px;
}
.input-box label {
  color: #333;
}
.form :where(.input-box input, .select-box) {
  position: relative;
  height: 50px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #707070;
  margin-top: 8px;
  border: 1px solid #ddd;
  border-radius: 6px;
  padding: 0 15px;
}
.input-box input:focus {
  box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
}
.form .column {
  display: flex;
  column-gap: 15px;
}

.address :where(input, .select-box) {
  margin-top: 15px;
}
.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #707070;
  font-size: 1rem;
}
.form button {
  height: 55px;
  width: 100%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 30px;
  border: none;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #4a98f7;
}
.form button:hover {
  background: rgb(88, 56, 250); 
}




/* ----------------------------------style_trasport_service-----------------------------------------  */
.flt_navigat{
  display: flex;
  justify-content: center;
  }
.floating_navigationbar{
  position: fixed;
  padding: 10px;
  width: 80%;
  height: 40px;
  background: #cfcece;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  border-radius: 15px;
  z-index: 1;
}

.ver{
  width: 2px;
  background-color: #000000;
  height: 100%;
}

.togg{
  min-width: 70px;
}
.togg a{
  color: #000000;
}

.togg a.active,a:hover{
  color: #4a98f7;
}
@media screen and (max-width: 500px) {
  .floating_navigationbar{
   width: 95%;
   bottom: 20px;

  }

  .nav{
height: 50px;
  }
  .hd {
    height: 50px;
  }
}


  </style>