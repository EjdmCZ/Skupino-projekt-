<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="..\css\index.css"/>
    <script src="https://kit.fontawesome.com/0ecc88a5a3.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Informace ze světa her
      
    </title>
  </head>
  <body>
    <?php
      $Prihlasen_TF = "";
      if ($_SESSION["prihlaseni"] == true) {$Prihlasen_TF = "Přihlášen";
        } else {$Prihlasen_TF = "Nepřihlášen";}
      $username = $_SESSION['username'];
    ?>  
    <div class="nav">
      <ul>
        <li><a class="Novinky" href="novinky.html">Novinky</a></li>
        <li><a class="Domov" href="index.php">Domů</a></li>
        <li><a class="Hry" href="hry.html">Hry</a></li>
        <li><a class="onás" href="onas.html">O nás</a></li>
        <img src="moon.png" id="mode-toggle" alt="Dark Mode / Light Mode" onclick="toggleMode()">
        <div class="dropdown">
          <img src="../pictures/Menu_icon.png" class="menu" alt="Otevřít menu">
        <div class="dropdown-content">
          <a href="login.php">login</a>
          <a href="register.html">register</a>
        </div>
        </div>
     </ul>
    </div>
    <p>Vítejte <?php echo $username; ?></p>
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
  <script src="../javascript/js.js"></script>
  </body>  
    
</html>
