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
$stmt = $conn->prepare("INSERT INTO usuario (nome, fone, email, senha) VALUES (?, ?,? ,?)");
$stmt->bind_param("ss", $email, $senha);

// set parameters and execute
$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$senha = sha1("John");
$stmt->execute();


echo "Usuario Cadastrado";

$stmt->close();
$conn->close();
?>