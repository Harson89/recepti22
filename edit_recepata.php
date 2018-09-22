<?php



require_once 'konekcija.php';
require_once 'navbar.html';
require_once 'uredjivanje_recepata.html';
require_once 'footer.html';





$id_recepta1=$_GET['uredi_id'];



if(isset($_GET['uredi'])) {

$novinaziv = $_GET['nazivrecepta'];
$novapriprema = $_GET['priprema'];


$query = "UPDATE recepti SET naziv=?, priprema=?  WHERE id = ?"; 
$stmt = $pdo->prepare($query);
$stmt->execute([$novinaziv,$novapriprema,$id_recepta1]);



}








//Prebire iz baze potreban recept za uredjivanje preko id_a recepta

$query = "SELECT * FROM recepti WHERE id = ?";
$stmt2 = $pdo->prepare($query); 
$stmt2->execute([$id_recepta1]);
while ($row = $stmt2->fetch()) {
   
   
  $_SESSION['ispis_priprema'] = $row['priprema'];
  $_SESSION['ispis_naziva'] = $row['naziv'];
  
  $idrecepta = $row['id'];
  
  $stmt3 = $pdo->prepare('SELECT url FROM slike WHERE recepti_id = ?');
$stmt3->execute([$idrecepta]);
while($user = $stmt3->fetch()) {
    
    $url = $user['url'];  
 
}
  
 
} 




?>