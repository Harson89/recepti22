<?php
session_start();
require_once 'konekcija.php';


  
 if(isset($_GET['uredi'])) {

    
    
$novinaziv = $_GET['nazivrecepta'];
$novapriprema = $_GET['priprema'];
$za_urediti = $_GET['treba_urediti'];

$query = "UPDATE recepti SET naziv=?, priprema=?  WHERE id = ?"; 
$stmt = $pdo->prepare($query);
$stmt->execute([$novinaziv,$novapriprema,$za_urediti]);

header("Location:moj_profil.php");

}

  



?>