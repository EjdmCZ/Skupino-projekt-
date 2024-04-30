<?php
function nacti_vybranou_barvu() {
    if (isset($_COOKIE["vybrana_barva"])) {
        return $_COOKIE["vybrana_barva"];
    } else {
        return "#ccc";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link href="../css/onas.css" rel="stylesheet" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        body {
              background-color: <?php echo nacti_vybranou_barvu(); ?>;
             }
     </style>

    <title>Document</title>
  </head>
  <body>
    <?php include 'navbar.php';?>

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
