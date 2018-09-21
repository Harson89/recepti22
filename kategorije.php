<?php
session_start();

require_once 'konekcija.php';

//Preko tipa usera odredjuje kakav ce navbar menu biti!!

$tipusera = $_SESSION['tip'];

if ($tipusera == 1) {
    require_once 'navbar.html';
}

else {
    require_once 'navbargest.html';
}
require_once 'kategorije.html';

?>