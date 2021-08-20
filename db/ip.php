<?php

//echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];

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
$stmt = $conn->prepare("INSERT INTO acesso (idSessao, ip, idSessao, data) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $idSessao, $ip, $idSessao, $data);

// set parameters and execute
$idSessao = $a;
//$idProduto = 10;
$ip = $_SERVER["REMOTE_ADDR"];

$stmt->execute();

echo "Produto inserio no Pedido";

$stmt->close();
$conn->close();
