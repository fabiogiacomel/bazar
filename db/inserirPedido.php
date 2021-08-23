<?php

if (!isset($_SESSION)) session_start();

$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

$idProduto =  $_GET['cod'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // set parameters and execute
  $idSessao =  $_COOKIE["PHPSESSID"];
//$idProduto = 10;
  $ip = $_SERVER["REMOTE_ADDR"];
$cookie = $_COOKIE["PHPSESSID"];
$data = date('d/m/Y');
$idUsuario =  $_SESSION["UsuarioID"];

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO pedidos (idSessao, idProduto, ip, cookie, data, idUsuario ) VALUES (:idSessao, :idProduto, :ip, :cookie, :data, :idUsuario)");
  $stmt->bindParam(':idSessao', $idSessao);
  $stmt->bindParam(':idProduto', $idProduto);
  $stmt->bindParam(':ip', $ip);
  $stmt->bindParam(':cookie', $cookie);
  $stmt->bindParam(':data', $data);
  $stmt->bindParam(':idUsuario', $idUsuario);
  $stmt->execute();
  echo "Reserva registrada!";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
  //echo "Você deve se cadastar primeiro!";
}
$conn = null;
?>