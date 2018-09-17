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
        
        $query = "INSERT INTO users(username, ime, prezime , sifra, email) "
                . "VALUES (?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username,$ime,$prezime,$sifra,$email]);  
        
        
        //Prebire tip usera i saljega na main page kod registra
        
       $stmt = $pdo->prepare('SELECT user_type FROM users WHERE username = ?');
       $stmt->execute([$username]);
       $user = $stmt->fetch();
       
       $_SESSION['tip'] = $user['user_type'];
        
        
        
        header('Location: /recepti22/matica.php');
        
      
}

?>