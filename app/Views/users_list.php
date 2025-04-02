<?php

use Config\Database;

$mysqli = mysqli_init();
$dbconfig = new Database();

// Obtenemos los datos desde la instancia de configuración
$hostname = $dbconfig->default['hostname'];
$port     = $dbconfig->default['port'];
$user     = $dbconfig->default['username'];
$password = $dbconfig->default['password'];
$database = $dbconfig->default['database'];

// Intentamos conectar con MySQL usando mysqli manualmente
$mysqliConnected = $mysqli->real_connect($hostname, $user, $password, $database, $port, null, MYSQLI_CLIENT_SSL);

if (!$mysqliConnected) {
    die("<p>Error de conexión: " . htmlspecialchars($mysqli->connect_error) . "</p>");
}

$query = "SELECT user_id, name, email FROM users";
$result = $mysqli->query($query);

echo "<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Lista de Usuarios</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid #ccc; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
<h2 style='text-align: center;'>Lista de Usuarios</h2>";

if ($result) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['user_id']) . "</td>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
              </tr>";
    }
    echo "</table>";
    $result->free();
} else {
    echo "<p>Error al consultar datos: " . htmlspecialchars($mysqli->error) . "</p>";
}

echo "</body></html>";

$mysqli->close();
?>
