<?php

require_once 'konekcija.php';


$stmt = $pdo->query('SELECT naziv FROM kategorije');
foreach ($stmt as $row)
{
    echo '<option value="'.$row['naziv'].'" >';
    echo $row['naziv'];
    echo '</option>';
    echo '<br>';
}


?>