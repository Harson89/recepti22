<?php

require_once 'konekcija.php';

require_once 'navbar.html';
require_once 'dodavanjerecepata.html';



 if(isset($_GET['dodaj'])){
     
     $autor = $_SESSION['id_usera'];
     $naziv_recepta = ($_GET['nazivrecepta']);
     $kategorija= ($_GET['kategorija']);
     $priprema= ($_GET['priprema']);
     
    /* 
     
     //Dodaje user_id u recepte 
     
     $query = "INSERT INTO recepti(user_id) " 
             . "VALUES (?)";
     $stmt = $pdo->prepare($query);
     $stmt->execute([$autor]); 
     
     */
     
     
     //Prebire id kategorije po odabranoj opciji
     
     
     $stmt = $pdo->prepare('SELECT id FROM kategorije WHERE naziv = :kategorija');
     $stmt->execute(['kategorija' => $kategorija]);
     $user = $stmt->fetch();
     
    
     
   /*  //Dodaje id kategorije u recept
     
     $query = "INSERT INTO recepti(kategorije_id) "
             . "VALUES (?)"; 
     $stmt = $pdo->prepare($query); 
     $stmt->execute([$user['id']]);
     
    */ 
     
     //Dodaje naziv i nacin pripreme u recepte 
     
     $query = "INSERT INTO recepti(kategorije_id,user_id,naziv, priprema) "
             . "VALUES (?,?,?,?)";
     $stmt = $pdo->prepare($query);
     $stmt->execute([$user['id'],$autor,$naziv_recepta,$priprema]);
     
      // Nekad radilo -->   header('Location: /recepti22/kategorije.php');

     
 }


?>