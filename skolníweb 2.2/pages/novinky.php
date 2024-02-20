<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../css/novinky.css" rel="stylesheet" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Novinky</title>
  </head>
  <body>
    <div class="nav">
      <ul>
        <li><a class="Novinky" href="novinky.php">Novinky</a></li>
        <li><a class="Domov" href="index.php">Domů</a></li>
        <li><a class="Hry" href="hry.html">Hry</a></li>
        <li><a class="onás" href="onas.html">O nás</a></li>
        <img
          src="moon.png"
          id="mode-toggle"
          alt="Dark Mode / Light Mode"
          onclick="toggleMode()"
        />
      </ul>
      <script src="../javascript/js.js "></script>
    </div>

    <?php

      $novinka = array(
        "Jméno" => "Last Holiday" ,
        "Vydaní" => "18. května 2023 ",
        "Vydavatel" => "Boomer Games",
        "Popis" => "Hra nebyla plně vydaná, a její budoucnost je nejsitá. Hra je v Předběžným přístupu vyšla ve strašném stavu, a plného vydání se nejspíš nedočká"
         );

    ?>

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

      <table class="ramecek">
        <tr>
        <th>
          <?php echo $novinka["Jméno"] ?>
        </th>
        </tr>
        <tr>
        <th>
          <?php echo $novinka["Vydaní"] ?>
        </th>
        </tr>
        <tr>
        <th>
          <?php echo $novinka["Vydavatel"] ?> 
        </th>
          </tr>
        <tr>  
        <th>
          <?php echo $novinka["Popis"] ?>
        </th>
        </tr>
      </table>
    </table>
  </body>
</html>
