<?php
// db_connection.php

$servername = "127.0.0.1";
$username = "root"; // Altere conforme necessário
$password = ""; // Altere conforme necessário
$dbname = "dbfilmes";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>