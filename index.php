<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" href="editindex.css"
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        require_once 'konekcija.php';  
        require_once 'register.php';
        require_once 'login.php';
      
        ?>
        
    <!-- Login forma-->
        
  <div class="login-box">
      <br> <br> <br>
    <div class="social-login">
      <a href="#">
        <i class="fa fa-facebook fa-lg"></i>
        Login in with facebook
      </a>
      <a href="#">
        <i class="fa fa-google-plus fa-lg"></i>
        log in with Google
      </a>
    </div>
      
      <form class="email-login" action="login.php" method="GET">
      <div class="u-form-group">
        <input  type="text" required name="username"  placeholder="Username"/>
      </div>
      <div class="u-form-group">
        <input  type="password" required name="password" placeholder="Password"/>
      </div>
      <div class="u-form-group">
          <button name="login_submit">Log in</button>
      </div>

    </form>
      
       <!-- Register forma-->
      
     
       <form class="email-signup" action="register.php" method="GET">
        
         <div class="u-form-group">
            <input type="text" required name="username" placeholder="Unesite username"/>
      </div>
        
        <div class="u-form-group">
            <input type="text" required name="ime" placeholder="Unesite Ime"/>
      </div>
        
        <div class="u-form-group">
        <input type="text" required name="prezime" placeholder="Unesite prezime"/>
      </div>
        
      <div class="u-form-group">
        <input type="email" required name="email" placeholder="Email"/>
      </div>
      <div class="u-form-group">
          <input type="password" required name="password" placeholder="Password"/>
      </div>
      
        
      <div class="u-form-group">
        <button name="register_submit">Sign Up</button>
      </div>
      
         
           <?php 
           /*
           session_start();
           
           echo $_SESSION['registereror'];
          
            */
           ?>
         
           
    </form>
  </div>
        
        <script>
            
            $(".email-signup").hide();
$("#signup-box-link").click(function(){
  $(".email-login").fadeOut(100);
  $(".email-signup").delay(100).fadeIn(100);
  $("#login-box-link").removeClass("active");
  $("#signup-box-link").addClass("active");
});
$("#login-box-link").click(function(){
  $(".email-login").delay(100).fadeIn(100);;
  $(".email-signup").fadeOut(100);
  $("#login-box-link").addClass("active");
  $("#signup-box-link").removeClass("active");
});
            
        </script> 
    
    </body>
</html>
