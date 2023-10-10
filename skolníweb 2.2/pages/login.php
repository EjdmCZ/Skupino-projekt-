<!DOCTYPE html>
<html>
<head>
    <title>Přihlášení</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <nav>
        <ul>
            <li class="domu"><a href="index.html">Domů</a></li>
            <li><a href="help-log.html">Pomoc</a></li>
        </ul>
    </nav>
    <center>
    <div class="form">
        <h1 id="Prvni_nadpis">Přihlášení</h1>

        <?php
        $zprava = '';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $uzivatelskeJmeno = isset($_POST["user"]) ? $_POST["user"] : "";
            $heslo = isset($_POST["user_pass"]) ? $_POST["user_pass"] : "";

            // Kontrola, zda uživatelské jméno je "Jan Macak" a heslo je "12345".
            if ($uzivatelskeJmeno === "Jan Macak" && $heslo === "12345") {
                // Přihlášení úspěšné
                $zprava = "Přihlášení úspěšné, Vítejte, Jan Macak!";
            } else {
                // Přihlášení selhalo
                $zprava = "Špatné uživatelské jméno nebo heslo. Zkontrolujte své údaje.";
            }
        }
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
