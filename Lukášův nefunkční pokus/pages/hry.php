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
    <link href="../css/hry.css" rel="stylesheet" />
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
    
       </div>
      <div class="grid-container">
         <div class="grid-item"> <img src="../pictures/Rainbow six siege.jpg" class="r6">
          Rainbow six siege</div>
         <div class="grid-item"> <img src="../pictures/valorant.jpg" class="val">
          Valorant</div>
         <div class="grid-item"> <img src="../pictures/Grand_Theft_Auto_V.png" class="gta">
          Grand theft auto
         </div>
         <div class="grid-item"> <img src="../pictures/csko.jpg" class="csko">
          Counter Strike: Global Offensive</div>
         <div class="grid-item"> <img src="../pictures/mc.jpg" class="mc">
          Minecraft</div>
         <div class="grid-item"> <img src="../pictures/rbx.jpg" class="rbx">
          Roblox</div>
         <div class="grid-item"> <img src="../pictures/fn.png" class="fn">
          Fortnite</div>
         <div class="grid-item"> <img src="../pictures/fh5.png" class="fh5">
          Forza Horizon 5</div>
         <div class="grid-item"> <img src="../pictures/III.jpg" class="III">
          Hitman III</div>
         <div class="grid-item"> <img src="../pictures/pbg.jpg" class="pbg">
          Pubg</div>
          <div class="grid-item"> <img src="../pictures/Ragn.jpg" class="gwr">
          God of War Ragnarok</div>
         <div class="grid-item"> <img src="../pictures/Ragn.jpg" class="atom">
          Atomic Hearts</div>
          <div class="grid-item"> <img src="../pictures/lh.jpg" class="lh">
          Last Holiday</div>
          <div class="grid-item"> <img src="../pictures/mb.jpg" class="mb">
          Mon bazou</div>
  
       </div>
       <script src="../javascript/js.js "></script>
  </body>
</html>
