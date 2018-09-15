<?php

require_once 'konekcija.php';

if (isset($_GET['login_submit'])) {
   
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
      
    
    }
    
    
    
    
    
    
    
    
    
    
    
    
   /* $stmt = $pdo->prepare('SELECT * FROM users WHERE username = :username AND sifra= :password');
    $stmt->execute(['username' => $nadimak, 'password' => $sifra]);
    $user = $stmt -> fetch();
   */ 
    
    
    
}

?>