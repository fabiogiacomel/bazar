<?php


$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

$nome =  $_GET['nome'];
$fone =  $_GET['fone'];
$email =  $_GET['email'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO usuario (nome, fone, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $fone, $email);

// set parameters and execute
$idSessao = $a;
//$idProduto = 10;
$ip = $_SERVER["REMOTE_ADDR"];
$cookie = $_COOKIE["PHPSESSID"];
$stmt->execute();

echo "Inserir Usuario";

$stmt->close();
$conn->close();
