<?php



require_once 'konekcija.php';
require_once 'navbar.html';
require_once 'uredjivanje_recepata.html';
require_once 'footer.html';



/*Edit forma 

if(isset($_GET['uredi'])) {

$novinaziv = $_GET['nazivrecepta'];
$novapriprema = $_GET['priprema'];
$_SESSION['id_recepta'] = $_GET['uredi_id'];


$query = "UPDATE recepti SET naziv=?, priprema=? "   . "WHERE id = ?"; 
$stmt = $pdo->prepare($query);
$stmt->execute([$novinaziv,$novapriprema,$id_recepta]);



}
*/


$id_recepta = $_GET['uredi_id'];
echo $id_recepta;





//Prebire iz baze potreban recept za uredjivanje preko id_a recepta

$query = "SELECT * FROM recepti WHERE id = ?";
$stmt2 = $pdo->prepare($query); 
$stmt2->execute([$id_recepta]);
while ($row = $stmt2->fetch()) {
   
   
  $_SESSION['ispis_priprema'] = $row['priprema'];
  $_SESSION['ispis_naziva'] = $row['naziv'];
  
  $idrecepta = $row ['id'];
  
  $stmt3 = $pdo->prepare('SELECT url FROM slike WHERE recepti_id = ?');
$stmt3->execute([$idrecepta]);
while($user = $stmt3->fetch()) {
    
    $url = $user['url'];  
 
}
  
  $vlasnik = $row['user_id'];
 
//Preko dobijenog id-a ispisuje ime i prezime usera 
$stmt1 = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt1->execute([$vlasnik]);
while($user = $stmt1->fetch()) {
    
    $imena = $user['ime'];
    $prezimena = $user['prezime'];
  
} 
}



?>