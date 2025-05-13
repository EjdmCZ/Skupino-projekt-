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
    <link href="../css/hry.css" rel="stylesheet" />
    <style>
        body {
            background-color: <?php echo nacti_vybranou_barvu(); ?>;
        }
	  </style>
  	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
  <?php include 'navbar.php';?>
        </div>
     </ul>
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
