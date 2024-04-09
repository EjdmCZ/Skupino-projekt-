
<?php
// Zkontrolujeme, zda byl formulář odeslán
function nacti_vybranou_barvu() {
    if (isset($_COOKIE["vybrana_barva"])) {
        return $_COOKIE["vybrana_barva"];
    } else {
        return "#ccc"; // Vrací výchozí bílou barvu, pokud není vybrána žádná barva
    }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="../css/clenove.css" />
    <style>
body {
            background-color: <?php echo nacti_vybranou_barvu(); ?>;
        }
	</style>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Naši Členové</title>
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
    <h1 class="nadpis">Naši Členové</h1>
    <div class="infoa">
      <div id="adam2">Adam Wild</div>
      <div id="luks2">Lukáš Vorlíček</div>
      <div id="stepan2">Štěpán Šesták</div>
      <div id="trachtic2">☠Jan Trachta☠</div>
    </div>
    <a target="_blank" href="../pages/bio1.html"
      ><img class="adam" src="../pictures/adam.png"
    /></a>
    <img class="luks" src="../pictures/luks.png" />
    <img class="stepan" src="../pictures/stepan.png" />
    <a target="_blank" href="trachtic.php">
    <img class="trachtic" src="../pictures/trachtic.png" />
  </a>
  <?php
if(count($_COOKIE) > 0) {
  echo "Cookies are enabled.";
} else {
  echo "Cookies are disabled.";
}
?>

    <script src="../javascript/js.js "></script>
  </body>
</html>
