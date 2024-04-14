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
<html>
<head>
	<link rel="stylesheet" href="..\css\custom.css"/>
	<style>
		body {
      background-color: <?php echo $selectedColor; ?>;
    }
	</style>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informace ze světa her</title>
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

<div class="okolo_form">
<form method="post" class="lab" style="background-color: <?= $selectedColor ?>;">
	<label>Přizpůsobení</label>
	<br>
	<label>Výběr barvy pozadí</label>
	 <input type="color" id="tableColor" name="tablecolor" value="<?= $selectedColor ?>">
	<br>
	<input type="submit" name="s">
</form>
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