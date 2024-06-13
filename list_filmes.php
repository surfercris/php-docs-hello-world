<?php
// list_filmes.php

include 'db_connection.php';

$sql = "SELECT * FROM filmes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Saída dos dados de cada linha
    while($row = $result->fetch_assoc()) {
        echo "Titulo: " . $row["Titulo"]. " - Ano: " . $row["Ano"]. " - Diretor: " . $row["Diretor"]. " - Genero: " . $row["Genero"]. " - Duracao: " . $row["Duracao"]. " - Classificação: " . $row["Classificação"]. "<br>";
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>