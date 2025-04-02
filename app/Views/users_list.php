<?php

// Asegúrate de que, si usas este script fuera del flujo normal de CI,
// tengas los require adecuados para bootstrap (por ejemplo):
// require_once __DIR__ . '/../../vendor/autoload.php';
// require_once __DIR__ . '/../../app/Config/Boot/development.php';

use \Config\Database;

// Obtenemos la conexión principal (usará los valores de .env por defecto)
$db = Database::connect();

// De la conexión $db obtenemos el objeto mysqli nativo:
$mysqli = $db->connID;

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
