<?php

require_once 'navbar.html';
require_once 'konekcija.php';

$naziv = "Glavna jela";


$query = "SELECT * FROM kategorije WHERE naziv = ?";
$stmt = $pdo->prepare($query); 
$stmt->execute([$naziv]);

while ($row = $stmt->fetch()) 
        { 
    
    echo $row['opis'];
    
    }

?>


<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Matica</title>     
        <link rel="stylesheet" href="editmatica.css">
    </head>
    
    
    <body>
        
        
        
        
        
    </body>  
</html>