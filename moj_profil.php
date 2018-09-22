<?php
session_start();

require_once 'konekcija.php';

if ($_SESSION['tip'] == 0) 
    {
    require_once 'navbargest.html';
}

else  {
    require_once 'navbar.html';
}

require_once 'footer.html';

$trenutniuser = $_SESSION['id_usera'];


//Prebire iz baze recepte od trenutnog usera 

$query = "SELECT * FROM recepti WHERE user_id = ?";
$stmt2 = $pdo->prepare($query); 
$stmt2->execute([$trenutniuser]);
while ($row = $stmt2->fetch()) {
   
   echo '<br> <br> <br>'; 
   
  echo '<div class="tabelica1">'; 
  echo '    <table border="1px solid black" class="tabelica"> ';
  echo ' <tr>';
  echo ' <th class="zanaslov" colspan="2"> '.$row["naziv"].'</th> ';
  echo ' </tr> ';
  echo ' <tr> ';
  echo '  <td class="zasliku" rowspan="2"> ';
  
  $idrecepta = $row ['id'];
  
  $stmt3 = $pdo->prepare('SELECT url FROM slike WHERE recepti_id = ?');
$stmt3->execute([$idrecepta]);
while($user = $stmt3->fetch()) {
    
    $url = $user['url'];
    
    echo "<img src='".$url."' alt='Nema slike'>";
}
  
  
  echo '</td> ' ;
  
  
  
  echo '<td class="zaautora"> ';
  
  $vlasnik = $row['user_id'];
 
//Preko dobijenog id-a ispisuje ime i prezime usera 
$stmt1 = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt1->execute([$vlasnik]);
while($user = $stmt1->fetch()) {
    
    $imena = $user['ime'];
    $prezimena = $user['prezime'];

   echo 'Autor:'. $imena . " " . $prezimena . "<br>";    
}

  
  
  
  echo '</td> ';
  
  echo '</tr> ';
  echo ' <tr> ';
  
 
    echo '<td class="zadugmad"> ';

    //Uredi i izbrisi buttoni 
    
    
    
    echo '<button class="izbrisi_button">';  
     echo '<a href="delete_recept.php?izbrisi_id='.$idrecepta.'">';
    echo 'Izbriši';
     echo '</a>';
    echo '</button> ';
    
    
    
   echo ' <form method="GET" action="edit_recepata_PRAVI.php"> ';
   echo ' <input name="daaj" type="hidden" value="'.$idrecepta.'" /> ';
   echo ' <input type="submit" name="daj_id_uredi" value="Uredi" href="edit_recepata_PRAVI.php" /> ';
   echo ' </form> ';
    

    
    
    echo '</td> ';

  
  echo ' </tr> ';
  echo '<tr> ';
  echo '  <td colspan="2" class="priprema"> Priprema: <br> <br> '.$row["priprema"].'</td> ';
  echo ' </tr>';
  echo '<tr>';
  echo '</tr>';
  echo ' </table> ';
  echo '<br>';
  echo '<br>';
  echo '<br>';
  echo '</div>'; 

}















?>


<head>
    <link rel="stylesheet" href="editzasvakukategoriju.css">
</head>