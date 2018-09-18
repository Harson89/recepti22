<?php
session_start();

require_once 'konekcija.php';


//Prebire tip usera i određuje kakav ce navbar biti!! 

if ($_SESSION['tip'] == 0) 
    {
    require_once 'navbargest.html';
}

else  {
    require_once 'navbar.html';
}


echo $_SESSION['tip'] . '<br>';

echo $_SESSION['id_usera'];

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