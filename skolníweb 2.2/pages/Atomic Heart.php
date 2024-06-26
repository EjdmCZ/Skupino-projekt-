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
    <link href="../css/Atomic Heart.css" rel="stylesheet" />
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
    <div class="nav">
      <ul>
        <li><a class="Novinky" href="novinky.php">Novinky</a></li>
        <li><a class="Domov" href="index.php">Domů</a></li>
        <li><a class="Hry" href="hry.php">Hry</a></li>
        <li><a class="onás" href="onas.php">O nás</a></li>
      </ul>
    
<body>
    <p>autor:Štěpán Šesták</p>
    <h1>Atomic Heart</h1>
    <div><p>Atomic Heart, za jehož vývojem stojí ruské studio Mundfish, hráče zavede do alternativní historie, kdy technologická revoluce proběhla mnohem dříve. Éře Sovětského svazu tak vládnou hologramy, internet i roboti. Poslední jmenovaní se však rozhodnou vzbouřit a vaším úkolem je tak zastavit jejich řádění.
      <br>Oficiální čeština v Atomic Heart není, ale  dispozici je již také český překlad pomocí AI<br></p>
      <center><li>
      </li></center>
      <h2>Gameplay</h2>
      <p>Atomic Heart je akční RPG z pohledu první osoby, kde je kladen důraz na souboje za využití improvizovaných zbraní. Prim v Atomic Heart totiž hraje likvidace rebelující robotů, a dokonce i biomutantů, a tak je třeba být na ně pořádně připraven. Munici zde však nenajdete na každém rohu a možností tak je i stealth nebo použití speciální polymerové rukavice, která hrdinovi umožňuje střílet elektrické i mrazivé střely nebo nepřátele rovnou hodit o zem.</p></div>
        <center>
  <li class="vid">
    <iframe class="video"  src="https://www.youtube.com/embed/GFyjojXpehA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
</li>
  </center>
</div>
<script src="../javascript/js.js "></script>
</body>
</html>
