<?php
// Parâmetros para criar a conexão
$servername = "localhost";
$username = "id18839396_livraria";
$password = "PNuG!j]bLzpBjM8H";
$dbname = "id18839396_bdlivrariaiserj";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checando a conexão
if ($conn->connect_error) {
  die("Você se deu mal: " . $conn->connect_error);
}

//Diretório

$directory='files';
?>