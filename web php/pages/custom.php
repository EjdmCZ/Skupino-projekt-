<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["barva"])) {
    $vybrana_barva = $_POST["barva"];
    setcookie("vybrana_barva", $vybrana_barva, time() + (86400 * 30), "/");
    header("Location: custom.php");
}
function nacti_vybranou_barvu() {
    if (isset($_COOKIE["vybrana_barva"])) {
        return $_COOKIE["vybrana_barva"];
    } else {
        return "#ccc";
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
<?php include 'navbar.php';?>

<h2 ><a href=index.php>Výběr barvy stránky</a></h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label>Vyberte barvu:</label><br>
    <input type="color" name="barva"><br><br>
    <input type="submit" value="Uložit">
</form>

</body>
</html>