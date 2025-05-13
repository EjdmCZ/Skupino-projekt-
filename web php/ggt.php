<?php
include 'config.php';

$sql = "SELECT * FROM Tabulka_Hry_SLA";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "id " . $row["id"] . "<br>";
    echo "podnapis " . $row["podnadpis"] . "<br>";
}
$conn->close();
?>