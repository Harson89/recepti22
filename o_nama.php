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

require_once 'onama.html';
require_once 'footer.html';




?>