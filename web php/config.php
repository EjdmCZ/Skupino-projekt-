<?php
$servername = "dbs.spskladno.cz";
$username = "student8";  // vaše uživatelské jméno
$password = "spsnet";  // vaše heslo
$dbname = "vyuka8";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Připojení selhalo: " . $conn->connect_error);
}
?>