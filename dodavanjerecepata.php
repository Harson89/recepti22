<?php


require_once 'konekcija.php';

require_once 'navbar.html';
require_once 'dodavanjerecepata.html';




 if(isset($_GET['dodaj'])){


$target_dir = "slike_recepata/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

     
     $autor = $_SESSION['id_usera'];
     $naziv_recepta = ($_GET['nazivrecepta']);
     $kategorija= ($_GET['kategorija']);
     $priprema= ($_GET['priprema']);
     
    /* 
     
     //Dodaje user_id u recepte 
     
     $query = "INSERT INTO recepti(user_id) " 
             . "VALUES (?)";
     $stmt = $pdo->prepare($query);
     $stmt->execute([$autor]); 
     
     */
     
     
     //Prebire id kategorije po odabranoj opciji
     
     
     $stmt = $pdo->prepare('SELECT id FROM kategorije WHERE naziv = :kategorija');
     $stmt->execute(['kategorija' => $kategorija]);
     $user = $stmt->fetch();
     
    
     
   /*  //Dodaje id kategorije u recept
     
     $query = "INSERT INTO recepti(kategorije_id) "
             . "VALUES (?)"; 
     $stmt = $pdo->prepare($query); 
     $stmt->execute([$user['id']]);
     
    */ 
     
     //Dodaje naziv i nacin pripreme u recepte 
     
     $query = "INSERT INTO recepti(kategorije_id,user_id,naziv, priprema , slika) "
             . "VALUES (?,?,?,?,?)";
     $stmt = $pdo->prepare($query);
     $stmt->execute([$user['id'],$autor,$naziv_recepta,$priprema,$target_file]);
     
      // Nekad radilo -->   header('Location: /recepti22/kategorije.php');

    header("Location:matica.php");
     
 }


 
?>