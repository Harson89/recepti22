<?php
session_start();
require_once 'konekcija.php';

require_once 'navbar.html';



 if(isset($_GET['daj_id_uredi'])) {

$recept_UREDI = $_GET['daaj'];


 
  
 /*if(isset($_GET['uredi'])) {

    
    
$novinaziv = $_GET['nazivrecepta'];
$novapriprema = $_GET['priprema'];
$za_urediti = $_GET['treba_urediti'];

$query = "UPDATE recepti SET naziv=?, priprema=?  WHERE id = ?"; 
$stmt = $pdo->prepare($query);
$stmt->execute([$novinaziv,$novapriprema,$za_urediti]);

}
*/
  


echo '<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div id="form-outer">
  <p id="description">
 
Uredi recept:
  
  </p>
  <form id="survey-form" action="dodavanje_funkcija.php" method="GET">
  <input name="treba_urediti" type="hidden" value="'.$recept_UREDI.'" />  

        <div class="rowTab">    
    </div>
    <div class="rowTab">
      <div class="labels">
        <label id="email-label" for="email">* Unesi novi naziv recepta: </label>
      </div>
      <div class="rightTab">
        <input type="text" name="nazivrecepta" id="email" class="input-field" required>
      </div>
    </div>
    <div class="rowTab">    
    </div>
    <div class="rowTab">
    <div class="rowTab">
      <div class="labels">
        <label for="comments"> Uredite pripremu recepta:</label>
      </div>
      <div class="rightTab">
        <textarea required id="comments" class="input-field" style="height:50px;resize:vertical;" name="priprema"></textarea>
      </div>
    </div>  
     <div class="rowTab">  
    </div>
    <button id="submit" type="submit" name="uredi">Gotovo</button>
  </form>
</div>  ';

 }
?>



    




    <head>
        <style>
            
         html,body {
  
  background-image: url('nbproject/wallpaper1.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  text-align: center;
  font-family: "Montserrat", Helvetica, sans-serif;
  min-width: 320px;
  margin: auto;
  
  
}
#description {
  font-size: 18px;
}
#form-outer {
  background-color: rgba(255,255,255,0.85);
  margin: auto;
  border-radius: 10px;
  width: 75%;
  max-width: 750px;
  padding: 10px;
  padding-top: 10px;
  margin-bottom: 30px;
}
.labels {
  display: inline-block;
  text-align: right;
  width: 40%;
  padding: 5px;
  vertical-align: top;
  margin-top: 10px;
}
.rightTab {
  display: inline-block;
  text-align: left;
  width: 48%;
  vertical-align: middle;
}
.input-field {
  height: 20px;
  width: 280px;
  padding: 5px;
  margin: 10px;
  border: 1px solid #c0c0c0;
  border-radius: 3px;
}
#userAge {
  width: 40px;
}
.userRatings,
input[type="checkbox"] {
  float: left;
  margin-right: 5px;
}
#submit {
  background-color: #222222;
  border-radius: 10px;
  color: white;
  font-size: 1em;
  height: 40px;
  width: 96px;
  margin: 10px;
  border: 0px solid;
  cursor: pointer;
}
#submit:hover {
  background-color: #555555;
}
.dropdown {
  height: 35px;
  width: 140px;
  padding: 5px;
  margin: 10px;  
  margin-top: 15px;
  border: 1px solid #c0c0c0;
  border-radius: 3px;
}

a:hover {
  color: #666666;
}

@media screen and (max-width: 833px) {
  .input-field {
    width: 80%;
  }
  select {
    width: 90%;
  }
}
@media screen and (max-width: 520px) {
  .labels {
    width: 100%;
    text-align: left;
  }
  .rightTab {
    width: 80%;
    float: left;
  }
  .input-field {
    width: 100%;
  }
  select {
    width: 100%;
  }
}   
            
        </style>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <link https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Josefin+Sans|Kosugi+Maru" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="editdodavanjerecepata.css">
  <link rel="stylesheet" href="edit_uredjivanje_recepata.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
        <title Edit recepata </title>
 
    </head>
    
   
        

      
  