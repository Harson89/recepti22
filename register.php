<?php



/*Registracija usera*/

require_once 'konekcija.php';

 if(isset($_GET['register_submit']))
{
     session_start();
     
        $username = ($_GET['username']);
        $ime = ($_GET['ime']);
        $prezime = ($_GET['prezime']);
        $email = ($_GET['email']);
        $sifra = ($_GET['password']);
        
        $sifra = md5($sifra);
     
     
    $stmt = $pdo->prepare("SELECT count(*) FROM users WHERE username=?");
    $stmt->execute([$username]);
    $usernameCount = $stmt->fetchColumn();
    
    if($usernameCount == 0) 
        
    {
     
      
        
        $query = "INSERT INTO users(username, ime, prezime , sifra, email) "
                . "VALUES (?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username,$ime,$prezime,$sifra,$email]);  
        
        
        //Prebire tip usera i saljega na main page kod registra
        
       $stmt = $pdo->prepare('SELECT user_type FROM users WHERE username = ?');
       $stmt->execute([$username]);
       $user = $stmt->fetch();
       
       $_SESSION['tip'] = $user['user_type'];
       
       $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
       $stmt->execute([$username]);
       $user = $stmt->fetch();
       
       $_SESSION['id_usera'] = $user['id'];
        
        
        
        header('Location: /recepti22/matica.php');
    }
    
    else 
    {
        header('Location: /recepti22/index.php');
        /*
        $_SESSION['registereror'] = "Username vec postoji!";
        
         */
    }
      
}

?>