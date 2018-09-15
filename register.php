<?php

/*Registracija usera*/

require_once 'konekcija.php';

 if(isset($_GET['register_submit']))
{
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
        
        header('Location: /recepti22/index.php');
}

?>