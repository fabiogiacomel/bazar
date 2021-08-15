<?php
$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO pedidos (idSessao, idProduto, ip) VALUES (?, ?, ?)");
$stmt->bind_param("iis",$idSessao, $idProduto, $ip);

// set parameters and execute
$idSessao = 123;
$idProduto = 10;
$ip="192.168.1.100";
$stmt->execute();

echo "Produto inserio no Pedido";

$stmt->close();
$conn->close();
?>