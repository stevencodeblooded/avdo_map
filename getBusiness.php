<?php
// Fehlerberichterstattung aktivieren
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Datenbankverbindung herstellen
$servername = "uniquelife-samp.de";
$username = "scripter";
$password = "dein_sicheres_passwort";
$dbname = "data";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verbindung überprüfen
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL-Abfrage
$sql = "SELECT ID, X, Y, BizName, BizBesitzer, BizPreis, OffenVon, OffenBis FROM biz";
$result = $conn->query($sql);

$markers = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $markers[] = $row;
    }
} else {
    $markers = []; // Falls keine Ergebnisse vorhanden sind, ein leeres Array zurückgeben
}

$conn->close();


// Daten als JSON zurückgeben
header('Content-Type: application/json');
echo json_encode($markers);
?>