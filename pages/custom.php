<?php
// Zkontrolujeme, zda byl formulář odeslán
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["barva"])) {
    // Získáme vybranou barvu z formuláře
    $vybrana_barva = $_POST["barva"];

    // Nastavíme cookie s vybranou barvou
    setcookie("vybrana_barva", $vybrana_barva, time() + (86400 * 30), "/"); // 86400 sekund = 1 den
    header("Location: custom.php");
}

// Funkce pro načtení barvy ze cookies
function nacti_vybranou_barvu() {
    if (isset($_COOKIE["vybrana_barva"])) {
        return $_COOKIE["vybrana_barva"];
    } else {
        return "#ccc"; // Vrací výchozí bílou barvu, pokud není vybrána žádná barva
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Výběr barvy stránky</title>
    <style>
        body {
            background-color: <?php echo nacti_vybranou_barvu(); ?>;
        }
    </style>
</head>
<body>

<h2 ><a href=index.php>Výběr barvy stránky</a></h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Vyberte barvu:</label><br>
    <input type="color" name="barva"><br><br>
    <input type="submit" value="Uložit">
</form>

</body>
</html>