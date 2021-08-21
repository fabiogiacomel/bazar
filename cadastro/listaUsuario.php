<?php
$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

$login = 'fabio';
$senha = sha1('fabio');

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT nome, fone, email FROM usuario WHERE email='$login' AND senha='$senha'");
  $stmt->execute();
  
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  print_r($stmt->fetchAll());
}
catch(PDOException $e) {
  //echo "Error: " . $e->getMessage();
  echo "login Invalido";
}
$conn = null;
?>