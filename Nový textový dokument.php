<?php
// Funkce pro uložení preference do cookies
function savePreference($color) {
    setcookie('tableColor', $color, time() + (86400 * 30), "/");
}

// Funkce pro načtení preference z cookies
function loadPreference() {
    return isset($_COOKIE['tableColor']) ? $_COOKIE['tableColor'] : '#ffffff';
}

// Zpracování formuláře
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['tableColor'])) {
        $selectedColor = $_POST['tableColor'];

        // Uložení preference do cookies
        savePreference($selectedColor);
    }
}

// Načtení preference z cookies
$selectedColor = loadPreference();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Color Preferences Table</title>
  <style>
    table {
      border-collapse: collapse;
      width: 50%;
    }

    th, td {
      padding: 10px;
      text-align: center;
      border: 1px solid #ddd;
    }
  </style>
</head>
<body>

  <form method="post">
    <label for="tableColor">Table Color:</label>
    <input type="color" id="tableColor" name="tableColor" value="<?= $selectedColor ?>">
    <button type="submit">Apply Color</button>
  </form>

  <table style="background-color: <?= $selectedColor ?>;">
    <thead>
      <tr>
        <th>Column 1</th>
        <th>Column 2</th>
        <th>Column 3</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Cell 1</td>
        <td>Cell 2</td>
        <td>Cell 3</td>
      </tr>
      <tr>
        <td>Cell 4</td>
        <td>Cell 5</td>
        <td>Cell 6</td>
      </tr>
    </tbody>
  </table>

</body>
</html>