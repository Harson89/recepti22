<?php
session_start();
require_once 'konekcija.php';


$id_recepta = $_GET['izbrisi_id'];



 $query = "DELETE FROM recepti WHERE id=?"; 
 $stmt = $pdo->prepare($query); 
 $stmt->execute([$id_recepta]); 

 header('Location: /recepti22/moj_profil.php');

?>