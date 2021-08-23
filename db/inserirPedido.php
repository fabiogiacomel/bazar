<?php

if(empty($a)) {
  
  
  
  session_start();
}
$a = session_id();

//echo "SID: ".SID."<br>session_id(): ".session_id()."<br>COOKIE: ".$_COOKIE["PHPSESSID"];

$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

$idProduto =  $_GET['cod'];
/*
switch ($cod) {
  case '1':
    $idProduto = 1;
    break;
  case '2':
    $idProduto = 2;
    break;
  case '3':
    $idProduto = 3;
    break;
  case '4':
    $idProduto = 4;
    break;
  case '5':
    $idProduto = 5;
    break;
  case '6':
    $idProduto = 6;
    break;
  case '7':
    $idProduto = 7;
    break;
  case '8':
    $idProduto = 8;
    break;
  case '9':
    $idProduto = 9;
    break;
  case '10':
    $idProduto = 10;
    break;
  case '11':
    $idProduto = 11;
    break;
  case '12':
    $idProduto = 12;
    break;
  case '13':
    $idProduto = 13;
    break;
  case '14':
    $idProduto = 14;
    break;
}
*/
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO pedidos (idSessao, idProduto, ip, cookie, data, idUsuario ) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("issssi", $idSessao, $idProduto, $ip, $cookie, $data, $idUsuario);

// set parameters and execute
$idSessao = $a;
//$idProduto = 10;
$ip = $_SERVER["REMOTE_ADDR"];
$cookie = $_COOKIE["PHPSESSID"];
$data = date('d/m/Y');
$idUsuario =  $_SESSION["UsuarioID"];
$stmt->execute();

echo "Produto inserio no Pedido";

$stmt->close();
$conn->close();