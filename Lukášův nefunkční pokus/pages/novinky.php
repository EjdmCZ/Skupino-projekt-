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
    <link href="../css/novinky.css" rel="stylesheet" />
    <style>
		body {
      background-color: <?php echo $selectedColor; ?>;
    }
	</style>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novinky</title>
  </head>
  <body>
    <div class="nav">
      <ul>
        <li><a class="Novinky" href="novinky.php">Novinky</a></li>
        <li><a class="Domov" href="index.php">Domů</a></li>
        <li><a class="Hry" href="hry.php">Hry</a></li>
        <li><a class="onás" href="onas.php">O nás</a></li>
      </ul>
      <script src="../javascript/js.js "></script>
    </div>
    <table>
      <tr class="ramecek">
        <th>Last Holiday</th>
        <th>
          <img
            src="https://cdn.cloudflare.steamstatic.com/steam/apps/2115850/header.jpg?t=1684425403"
          />
        </th>
        <th>
          Last Holiday vyšlo 18. května 2023 na PC v předběžném přístupu a
          obsahuje zatím zhruba třetinu příběhu. Hra bude postupně rozšiřována a
          někdy na přelomu let 2023 a 2024 by se měla dočkat plného vydání.
        </th>
      </tr>
    </table>
  </body>
</html>
