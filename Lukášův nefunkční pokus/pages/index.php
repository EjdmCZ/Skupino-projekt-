<?php 
  session_start();
   if (!isset($_SESSION["prihlaseni"])) {
       $_SESSION["prihlaseni"] = false;
      }
  if (!isset($_SESSION["username"])) {
       $_SESSION["username"] = "Nepřihlášen" ;
      }
 ?>
 <?php
function savePreference($color) {
    setcookie('tablecolor', $color, time() + (86400 * 30), "/");
}
function loadPreference() {
    return isset($_COOKIE['tablecolor']) ? $_COOKIE['tablecolor'] : '#ccc';
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tablecolor'])) {
        $selectedColor = $_POST['tablecolor'];
        savePreference($selectedColor);
    }
}
$selectedColor = loadPreference();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="../css/index.css" rel="stylesheet" />
  <style>
		body {
      background-color: <?php echo $selectedColor; ?>;
    }
	</style>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informace ze světa her
      
    </title>
  </head>
  <body>
    <?php
      $Prihlasen_TF = "";
      if ($_SESSION["prihlaseni"] == true) {
        $Prihlasen_TF = "Přihlášen";
        } else {$Prihlasen_TF = "Nepřihlášen";}
      $username = $_SESSION["username"];
      if ($_SESSION["prihlaseni"] == false) {
           $StylDispleje = "none";
          } else {$StylDispleje = "block";}   
    ?>  
    <div class="nav">
      <ul>
        <li><a class="Novinky" href="novinky.php">Novinky</a></li>
        <li><a class="Domov" href="index.php">Domů</a></li>
        <li><a class="Hry" href="hry.php">Hry</a></li>
        <li><a class="onás" href="onas.php">O nás</a></li>

        <div class="dropdown">
          <img src="../pictures/Menu_icon.png" class="menu" alt="Otevřít menu">
        <div class="dropdown-content">
          <a href="login.php">login</a>
          <a href="register.html">register</a>
          <a href="custom.php">Customizace</a>
        </div>
        </div>
     </ul>
    </div>
    <style>
        .skryty-text {
            display: <?php echo $StylDispleje; ?>;
                      }
    </style>
    <p class="skryty-text">Vítejte <?php echo $username; ?></p>
    <p><?php echo $Prihlasen_TF; ?></p>
    </div class="txt">
    <p class="Info" >Informace z Celého</br> Světa Her</p>
  </div>
  <div>
  <p class="zbyt">Informace ze světa her, novinky, aktulní dění<br> a spusta jiného. Budeme rádi, když se připojíte </br> na náš 
    <a class="dis" href="https://discord.com" target="_blank">discord.</a> </br></p></br><p><br>
    </div>
  <div class="zobrazit">
    <ul>
  <li><a href="novinky.html">Zobrazit Novinky</a></li>
  </ul>
  </div>
  <?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

  <script src="../javascript/js.js"></script>
  </body>  
    
</html>
