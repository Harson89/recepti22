<?php
session_start();


require_once 'konekcija.php';





//Prebire recepte iz baze po kategoriji 

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








?>

