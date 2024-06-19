
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login_style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,300,0,0" />
</head>
<body>

       <div class="signin">
       <div id="ssignin">
        
            <div class="login-card">
                 <div class="login-card-logo">
                    <img src="images/logo.png" alt="logo">
                 </div>
                <div class="login-card-header">
                   <h1>LOGIN</h1>
                <div>Only For Transportation Companies</div>        
            </div>
            <form class="login-card-form" method="POST" action="/companyloginverify">
                @csrf
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">mail</span> 
                    <input type="email" name="email" placeholder="Enter Email" >
                </div>
                <div class="form-item">
                    <span class="form-item-icon material-symbols-outlined">lock</span> 
                    <input type="password" name="password" placeholder="password" >
    
                </div>
             
                <button type="submit" >Sign in</button>
                <div style="color: red; text-align:center;">
                @if($errors->any())
                {{ implode('', $errors->all(':message')) }}
            @endif
        </div>
            </form>
               
            <script>
                function n1click()
                {
                    document.getElementById('ssignin').style.display="none";
                    document.getElementById('ssignup').style.display="block";

                }
               
                
            </script>
             

        </div>
        
       
         </div> 
        </div>

        

            
         </div>
      
        
     </div> 
    
</div></div>
     <!--javascript-->
     <script src="js/script.js"></script>
</body>
</html>
