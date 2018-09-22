<?php
session_start();

require_once 'konekcija.php';

$tipusera = $_SESSION['tip'];

if ($tipusera == 1) {
    require_once 'navbar.html';
}

else {
    require_once 'navbargest.html';
}

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
   
   echo '<br> <br> <br>'; 
   
  echo '<div class="tabelica1">'; 
  echo '    <table class="tabelica" border=1px > ';
  echo ' <tr>';
  echo ' <th colspan="2"> '.$row["naziv"].'</th> ';
  echo ' </tr> ';
  echo ' <tr> ';
  echo '  <td rowspan="2"> ';
  
  $idrecepta = $row ['id'];
  
  $stmt3 = $pdo->prepare('SELECT url FROM slike WHERE recepti_id = ?');
$stmt3->execute([$idrecepta]);
while($user = $stmt3->fetch()) {
    
    $url = $user['url'];
    
    echo "<img src='".$url."' alt='Nema slike'>";
}
  
  
  echo '</td> ' ;
  
  
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
 
  echo ' </tr> ';
  echo '<tr> ';
  echo '  <td colspan="2" height="200px"> '.$row["priprema"].'</td> ';
  echo ' </tr>';
  echo '<tr>';
  echo '</tr>';
  echo ' </table> ';
  echo '<br>';
  echo '</div>'; 

}
?>

<head>
    <link rel="stylesheet" href="editzasvakukategoriju.css"
</head>