<?php
session_start();

require_once 'konekcija.php';


$dodatiU = $_GET['daaj'];
$link = $_SESSION['link'];


$query = "UPDATE recepti SET slika=? WHERE id= ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$link,$dodatiU]); 

        



?>