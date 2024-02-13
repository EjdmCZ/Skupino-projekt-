<?php 
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>Přihlášení</title>
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <ul>
            <li class="domu"><a href="index.php">Domů</a></li>
            <li><a href="help-log.html">Pomoc</a></li>
        </ul>
    </nav>
    <center>
    <div class="form">
        <h1 id="Prvni_nadpis">Přihlášení</h1>

<?php

$zprava = '';
$uzivatele = array(
    "Jan Macak" => "12345",
    "Jakub Mesicek" => "12345",
    "Jaromír Soukup" => "12345",
    "Adam Jelínek" => "6789"
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $uzivatelskeJmeno = isset($_POST["user"]) ? $_POST["user"] : "";
    $heslo = isset($_POST["user_pass"]) ? $_POST["user_pass"] : "";

    // Kontrola zda je zadané uživatelské jméno a heslo v poli
    if (array_key_exists($uzivatelskeJmeno, $uzivatele) && $uzivatele[$uzivatelskeJmeno] === $heslo) {
        $zprava = "Přihlášení úspěšné, Vítejte, $uzivatelskeJmeno!";
        $_SESSION["prihlaseni"] = true;
        $_SESSION["username"] = $uzivatelskeJmeno;
    } else {
        $zprava = "Špatné uživatelské jméno nebo heslo. Zkontrolujte své údaje.";
        $_SESSION["prihlaseni"] = false;
    }
}
?>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label>Uživatelské jméno:</label>
            <input type="text" name="user" placeholder="Napiš sem svoje jméno" id="Jmeno"><br>

            <label>Heslo:</label>
            <input type="password" name="user_pass" placeholder="Napiš svoje heslo" id="heslo"><br>

            <input type="submit" name="submit" value="Potvrzení" id="potvrzení">
            Nejsi členem?<a href="register.html">Registruj se</a>
        </form>
        <p><?php echo $zprava; ?></p>
    </div>
    </center>
</body>
</html>
