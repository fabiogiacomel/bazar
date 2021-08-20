<?php


$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

$id =  $_GET['id'];


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO pedidos (idSessao, idProduto, ip, cookie) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $idSessao, $idProduto, $ip, $cookie);

// set parameters and execute
$idSessao = $a;
//$idProduto = 10;
$ip = $_SERVER["REMOTE_ADDR"];
$cookie = $_COOKIE["PHPSESSID"];
$stmt->execute();

echo "Produto inserio no Pedido";

$stmt->close();
$conn->close();
