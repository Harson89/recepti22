<?php
session_start();

require_once 'konekcija.php';

/*Bere id usera koji imaju recept u toj kategoriji
$stmt = $pdo->prepare('SELECT user_id FROM recepti WHERE kategorije_id= 1');
$stmt->execute();
while($user = $stmt->fetch()){   
$useri = $user['user_id'];


//Preko dobijenog id-a ispisuje ime i prezime usera 
$stmt1 = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt1->execute([$useri]);
while($user = $stmt1->fetch()) {
    
    $imena = $user['ime'];
    $prezimena = $user['prezime'];

   echo $imena . " " . $prezimena . "<br>";    
}
}

*/



//Prebire iz baze recepte pod tom kategorijom
$query = "SELECT * FROM recepti WHERE kategorije_id = 1";
$stmt2 = $pdo->prepare($query); 
$stmt2->execute();
while ($row = $stmt2->fetch()) {
  
    
  
  echo '    <table border=1px class="tg"> ';
  echo ' <tr>';
  echo ' <th colspan="2"> '.$row["naziv"].'</th> ';
  echo ' </tr> ';
  echo ' <tr> ';
  echo '  <td rowspan="2"> "Slika" </td> ' ;
  echo '<td> ';

  
  $vlasnik = $row['user_id'];
  
//Preko dobijenog id-a ispisuje ime i prezime usera 
$stmt1 = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt1->execute([$vlasnik]);
while($user = $stmt1->fetch()) {
    
    $imena = $user['ime'];
    $prezimena = $user['prezime'];

   echo $imena . " " . $prezimena . "<br>";    
}


   
  echo '</td> ';
  echo '</tr> ';
  echo ' <tr> ';
  echo ' <td > </td> ';
  echo ' </tr> ';
  echo '<tr> ';
  echo '  <td colspan="2"> '.$row["priprema"].'</td> ';
  echo ' </tr>';
  echo ' </table> '

    ;
}
?>

