<?php 
  session_start();
  
if(isset($_SESSION["prihlaseni"]) && $_SESSION["prihlaseni"] == true) {

  echo '<body style="background-color: #203a23">';

} else {

  echo '<body>'; 

}

function nacti_vybranou_barvu() {
    if (isset($_COOKIE["vybrana_barva"])) {
        return $_COOKIE["vybrana_barva"];
    } else {
        return "#ccc";
    }
}

$Prihlasen_TF = "";
if (isset($_SESSION["prihlaseni"]) && $_SESSION["prihlaseni"] == true) {
  $Prihlasen_TF = "Přihlášen";
  } else {$Prihlasen_TF = "Nepřihlášen";}
$username = isset($_SESSION["username"]) ? $_SESSION["username"] : '';
if (!isset($_SESSION["prihlaseni"]) || $_SESSION["prihlaseni"] == false) {
     $StylDispleje = "none";
    } else {$StylDispleje = "block";}   
$BarvaTextu = "";
 if (isset($_SESSION["prihlaseni"]) && $_SESSION["prihlaseni"] == true) {
  $BarvaTextu = "green";
  } else {$BarvaTextu = "red";}

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="..\css\index.css"/>
    <script src="https://kit.fontawesome.com/0ecc88a5a3.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informace ze světa her</title>
    <style>
        body {
            background-color: <?php echo nacti_vybranou_barvu(); ?>;
        }
        .skryty-text {
            display: <?php echo $StylDispleje; ?>;
        }
    </style>
  </head>
  <body>
  <?php include 'navbar.php';?>

    <div class="txt">
      <p class="Info" >Informace z Celého</br> Světa Her</p>
    </div>
    <div>
      <p class="zbyt">Informace ze světa her, novinky, aktulní dění<br> a spusta jiného. Budeme rádi, když se připojíte </br> na náš 
      <a class="dis" href="https://discord.com" target="_blank">discord.</a> </br></p></br><p><br>
    </div>
    <div class="zobrazit">
      <ul>
        <li><a href="novinky.php">Zobrazit Novinky</a></li>
      </ul>
    </div>
  <?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

  </body>  
    
</html>