<?php



require_once 'konekcija.php';

if (isset($_GET['login_submit'])) {
   
    session_start();
    
    $nadimak = $_GET['username'];
    $sifra = $_GET['password'];
    $sifra = md5($sifra);
    
    
    $stmt = $pdo->prepare("SELECT 1 FROM users WHERE username=?");
    $stmt->execute([$nadimak]);
    $userExists = $stmt->fetchColumn();
    
    if ($userExists!=1) 
        
    {
        echo "Ne postoji korisnik!";
        header('Location: /recepti22/index.php');

    }
    
    else if($userExists == 1)
        
    {
       
       $stmt = $pdo->prepare('SELECT sifra FROM users WHERE username = ?');
       $stmt->execute([$nadimak]);
       $user = $stmt->fetch();
       
      
       
       if($user['sifra'] == $sifra) 
       
       {
           header('Location: /recepti22/matica.php');
       }
       
       else {
             header('Location: /recepti22/index.php');
             echo "Sifra nije tacna!";

       }
       
        //Prebire tip usera i saljega na main page kod registra
       
       $stmt = $pdo->prepare('SELECT user_type FROM users WHERE username = ?');
       $stmt->execute([$nadimak]);
       $user = $stmt->fetch();
       
       $_SESSION['tip'] = $user['user_type'];
       
       $stmt = $pdo->prepare('SELECT id FROM users WHERE username = ?');
       $stmt->execute([$nadimak]);
       $user = $stmt->fetch();
       
       $_SESSION['id_usera'] = $user['id'];
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
   /* $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND sifra= :password');
    $stmt->execute(['username' => $nadimak, 'password' => $sifra]);
    $user = $stmt -> fetch();
   */ 
    
    
    
}

?>