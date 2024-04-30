<?php
function nacti_vybranou_barvu() {
    if (isset($_COOKIE["vybrana_barva"])) {
        return $_COOKIE["vybrana_barva"];
    } else {
        return "#ccc";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="../css/index.css" rel="stylesheet" />
    <style>
        body {
            background-color: <?php echo nacti_vybranou_barvu(); ?>;
          }
    </style>
    <title>Informace ze světa her</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
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

  </body>  
    
</html>
