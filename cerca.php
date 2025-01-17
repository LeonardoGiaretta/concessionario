<?php
$host = "localhost";
$username = "root"; 
$password = "";   
$dbname = "concessionario";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Errore di connessione: " . $conn->connect_error]));
}

$marca = $_GET['marca'] ?? '';
$modello = $_GET['modello'] ?? '';
$annoProduzione = $_GET['annoProduzione'] ?? '';
$fasciaPrezzo = $_GET['fasciaPrezzo'] ?? '';

$sql = "SELECT * FROM auto";
if ($marca) {
    $sql .= " AND marca LIKE '%" . $conn->real_escape_string($marca) . "%'";
}
if ($modello) {
    $sql .= " AND modello LIKE '%" . $conn->real_escape_string($modello) . "%'";
}
if ($annoProduzione) {
    $sql .= " AND annoProduzione = '" . $conn->real_escape_string($annoProduzione) . "'";
}
if ($fasciaPrezzo) {
    [$min, $max] = explode('-', $fasciaPrezzo . '-');
    $sql .= " AND prezzo BETWEEN " . intval($min) . " AND " . intval($max);
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    echo json_encode($data);
} else {
    echo json_encode([]);
}

$conn->close();
?>

