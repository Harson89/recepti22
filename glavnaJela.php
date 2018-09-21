<?php
session_start();

require_once 'konekcija.php';

//Ispisuje id usera koji imaju recepte u toj kategoriji

$stmt = $pdo->prepare('SELECT user_id FROM recepti WHERE kategorije_id= 1');
$stmt->execute();

while($user = $stmt->fetch()){
    
$useri = $user['user_id'];
echo $useri . '<br>';





$stmt1 = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt1->execute([$useri]);
while($user = $stmt1->fetch()) {
    
    
   $imena = $user['ime'];
   $prezimena = $user['prezime'];
   
   echo $imena . " " . $prezimena . "<br>";
    
}

}








/*Prebire recepte iz baze po kategoriji 

$query = "SELECT * FROM recepti WHERE kategorije_id = 1";
$stmt = $pdo->prepare($query); 
$stmt->execute();



while ($row = $stmt->fetch()) {
  

    
echo '    <table border=1px class="tg">
  <tr>
    <th colspan="2"> '.$row["naziv"].'</th>
  </tr>
  <tr>
    <td rowspan="2"> "Slika" </td>
    <td >   </td>
  </tr>
  <tr>
    <td ></td>
  </tr>
  <tr>
    <td colspan="2"> '.$row["priprema"].'</td>
  </tr>
</table>

    ';
    
} 

*/



?>

