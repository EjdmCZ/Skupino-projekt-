<?php
session_start();

if (isset($_SESSION['user_id'])) {
    $background_color = 'green';
    $button_text = "Odhlásit";
    $welcome_message = "Vítejte, jste přihlášen jako uživatel!";
} else {
    $background_color = 'red';
    $button_text = "Přihlásit";
    $welcome_message = "Nejste přihlášen.";
}

if (isset($_POST['action'])) {
    if ($_POST['action'] == "login") {
        $_SESSION['user_id'] = 1; 
    } elseif ($_POST['action'] == "logout") {
        session_unset(); 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: <?php echo $background_color; ?>;
        }
    </style>
</head>
<body>
    <h1><?php echo $welcome_message; ?></h1>

    <form method="post">
        <button type="submit" name="action" value="<?php echo (isset($_SESSION['user_id']) ? 'logout' : 'login'); ?>">
            <?php echo $button_text; ?>
        </button>
    </form>

    <script>
        var button = document.querySelector("button");
        button.addEventListener("click", function() {
            if (button.innerHTML === "Přihlásit") {
                
                document.body.style.backgroundColor = 'green';
                button.innerHTML = "Odhlásit";
                document.querySelector("h1").innerHTML = "Vítejte, jste přihlášen!";
            } else {
               
                document.body.style.backgroundColor = 'red';
                button.innerHTML = "Přihlásit";
                document.querySelector("h1").innerHTML = "Nejste přihlášen.";
            }
        });
    </script>
</body>
</html>