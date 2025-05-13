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
    <link href="../css/novinky.css" rel="stylesheet" />
    <style>
        body {
            background-color: <?php echo nacti_vybranou_barvu(); ?>;
            }
	   </style>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novinky</title>
  </head>
  <body>
  <?php include 'navbar.php';?>

    <table>
      <tr class="ramecek">
        <th>Last Holiday</th>
        <th>
          <img class="holiday"
            src="https://www.jiligamefun.com/wp-content/uploads/2023/06/4e426a56969dc7d6657aa0951070d964-58.jpg"
          />
        </th>
        <th >
          <p class="text">Last Holiday vyšlo 18. května 2023 na PC v předběžném přístupu a
          obsahuje zatím zhruba třetinu příběhu. Hra bude postupně rozšiřována a
          někdy na přelomu let 2023 a 2024 by se měla dočkat plného vydání.</p>
        </th>
      </tr>
      <tr class="ramecek">
        <th>GTA VI</th>
        <th>
          <img class="gta"
            src="https://cdn.alza.cz/Foto/ImgGalery/Image/grand-theft-auto-6-keyart.jpg"
          />
        </th>
        <th>
        Podle oficiálních informací by mělo Grand Theft Auto VI vyjít v roce 2025, přičemž šéf společnosti Ubisoft Yves Guillemot během telefonátu s investory (informuje o něm například portál <a target="_blank" href="https://www.ign.com/articles/gta-6-launch-will-also-be-positive-for-ubisoft-ceo-says">IGN</a>) odhadl vydání GTA VI nejdříve na duben 2025.
        </th>
      </tr>
    </table>
    <p>skibidi toaleta</p>
    <script src="../javascript/js.js"></script>
  </body>
</html>
