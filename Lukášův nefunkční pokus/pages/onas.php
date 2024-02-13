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
    <link href="../css/onas.css" rel="stylesheet" />
    <style>
		body {
      background-color: <?php echo $selectedColor; ?>;
    }
	</style>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <div class="nav">
      <ul>
        <li><a class="Novinky" href="novinky.php">Novinky</a></li>
        <li><a class="Domov" href="index.php">Domů</a></li>
        <li><a class="Hry" href="hry.php">Hry</a></li>
        <li><a class="onás" href="onas.php">O nás</a></li>
      </ul>
   
    </div>
    <p class="text">Něco o nás.</p>
    <p class="text2">
      Jsme skupina studentů střední školy a </br>toto je náš projektový web. Pokud vás zajímá vše </br> o našem webu, můžete se podívat na náš <a target="_blank" href="https://github.com/EjdmCZ/Skupino-projekt-">GitHub</a>
    </p>
    <div class="zobrazit">
    <ul>
      <li><a href="clenove.php">Zjistit Více</a></li>
      </ul>
    </div>
  </body>
  <script src="../javascript/js.js "></script>
</html>
