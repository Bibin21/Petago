
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login_style.css">

    <link rel="stylesheet" href="/Petago/public/src/output.css"> 

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
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
                <li><a href="#">Your Orders</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="./login">Login</a></li>
            </ul>
         <button>
            <i class="uil uil-user" style="color: aliceblue; font-size: 1.6rem;" ></i>
         </button>
          
            
        </nav>
    </div>

       <div class="signin">
       <div id="ssignin">
        
            <div class="login-card">
                 <div class="login-card-logo">
                    <img src="images/logo.png" alt="logo">
                 </div>
                <div class="login-card-header">
                   <h1>Sign In</h1>
                <div>please login to use</div>        
            </div>
            <form class="login-card-form" method="POST" action="#">
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">mail</span> 
                    <input type="email" name="username" placeholder="Enter Email" required autofocus>
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">lock</span> 
                    <input type="password" name="password" placeholder="password" required autofocus>
                </div>
                <div class="form-item-other">
                    <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox">
                        <label for="rememberMeCheckbox">Remember me </label>
                    </div>
                  
                    <a href="">forgot password!</a>

                </div>
                <button type="submit" onclick="window.open('home.html','_self')">Sign in</button>
               
            </form>
            <div class="login-card-footer">
                Don't have an account ? <a href="#" onclick="n1click()">create an account</a>
            </div>
            <script>
                function n1click()
                {
                    document.getElementById('ssignin').style.display="none";
                    document.getElementById('ssignup').style.display="block";

                }
               
                
            </script>
             

        </div>
        <div class="login-card-social">
            <div>other ways to sign in</div>
            <div class="login-card-social-btns">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                     </svg>  
                </a>
                <a href="{{ url('authorized/google') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                     </svg> 
                </a>
            </div>
        </div>
       
         </div> 
        </div>

        <!--SIGN UP-->
        <div style="display:no ne;"  class="signup">

<div id="ssignup" style="display: none;">
             <div class="login-card">
                <div class="login-card-logo">
                 <img src="images/logo.png" alt="logo">
                </div>
             <div class="login-card-header">
               <h1>Sign up</h1>
              
             <form class="login-card-form" method="POST" action="#" >
                <div class="form-item">
                    <input type="text" placeholder="Enter Name" required autofocus>
                </div>
                 <div class="form-item">
                     <input type="text" placeholder="Phone number" required autofocus>
                 </div>
                 <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">mail</span> 
                    <input type="email" placeholder="Enter Email" required autofocus>
                </div>
                 <div class="form-item">
                     <span class="form-item-icon material-symbols-outlined">lock</span> 
                     <input type="password" placeholder="Enter a password" required autofocus>
                 </div>
                 <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">lock</span> 
                    <input type="password" placeholder="confirm password" required autofocus>
                </div>
                 <div class="form-item-other">
                     <div class="checkbox">
                         <input type="checkbox" id="rememberMeCheckbox">
                         <label for="rememberMeCheckbox">Remember me </label>
                     </div>
                     <div class="checkbox">
                        <input type="checkbox" id="rememberMeCheckbox">
                        <label for="rememberMeCheckbox">agree to the terms and conditions </label>
                    </div>
                     
 
                 </div>
                 <button type="submit" onclick="window.location='home.html';" >Sign up</button>
             </form>
             <div class="login-card-footer">
                already have an account ? <a href="#" onclick="n2click()" class="register-link" >Sign In</a>
            </div>
            <script>
            function n2click()
            {
                document.getElementById('ssignup').style.display="none";
                document.getElementById('ssignin').style.display="block";

            }
        </script>
            
         </div>
         <div class="login-card-social">
             <div>other ways to sign in</div>
             <div class="login-card-social-btns">
                 <a href="#">
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-facebook" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M7 10v4h3v7h4v-7h3l1 -4h-4v-2a1 1 0 0 1 1 -1h3v-4h-3a5 5 0 0 0 -5 5v2h-3"></path>
                      </svg>  
                 </a>
                 <a href="{{ url('authorized/google') }}">
                     <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-google" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                         <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                         <path d="M17.788 5.108a9 9 0 1 0 3.212 6.892h-8"></path>
                      </svg> 
                 </a>
             </div>
         </div>
        
     </div> 
    
</div></div>
     <!--javascript-->
     <script src="js/script.js"></script>
</body>
</html>
