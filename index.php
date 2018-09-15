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
        
        /*Registracija*/
        
        if(isset($_POST['register_submit']))
{
        $username = ($_POST['username']);
        $ime = ($_POST['ime']);
        $prezime = ($_POST['prezime']);
        $email = ($_POST['email']);
        $sifra = ($_POST['password']);
        
        $sifra = md5($sifra);
        
        $query = "INSERT INTO users(username, ime, prezime , sifra, email) "
                . "VALUES (?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username,$ime,$prezime,$sifra,$email]);        
}

/*Login*/

  if (isset($_POST['login_submit'])) 
  {
      
     $username = ($_POST['username']);
     $sifra = ($_POST['password']);
     
     $sifra = md5($sifra);
     
   
$query = "SELECT * FROM users WHERE username = ? AND sifra = ? Limit 1";
$stmt = $pdo->prepare($query); 
$stmt->execute([$username, $sifra]);
    
    
     
      if(mysqli_num_rows($user) == 1)
    {
        echo "Uspiešno ste se prijavili";
        header('Location: /recepti22/matica.php');    
       exit();
    }
    else
    {
        echo "Pogresan username ili password";
        header('Location: /recepti22/index.php');            
        exit();
    } 
     
  }
    
  
        ?>
        
    <!-- Login forma-->
        
  <div class="login-box">
    <div class="lb-header">
      <a href="#" class="active" id="login-box-link">Login</a>
      <a href="#" id="signup-box-link">Sign Up</a>
    </div>
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
      <form class="email-login" action="index.php" method="POST">
      <div class="u-form-group">
        <input  type="text" name="username" placeholder="Username"/>
      </div>
      <div class="u-form-group">
        <input  type="password" name="password" placeholder="Password"/>
      </div>
      <div class="u-form-group">
          <button name="login_submit">Log in</button>
      </div>

    </form>
      
       <!-- Register forma-->
      
       <form class="email-signup" action="index.php" method="POST">
        
         <div class="u-form-group">
            <input type="text" name="username" placeholder="Unesite username"/>
      </div>
        
        <div class="u-form-group">
            <input type="text" name="ime" placeholder="Unesite Ime"/>
      </div>
        
        <div class="u-form-group">
        <input type="text" name="prezime" placeholder="Unesite prezime"/>
      </div>
        
      <div class="u-form-group">
        <input type="email" name="email" placeholder="Email"/>
      </div>
      <div class="u-form-group">
        <input type="password" name="password" placeholder="Password"/>
      </div>
      
        
      <div class="u-form-group">
        <button name="register_submit">Sign Up</button>
      </div>
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
