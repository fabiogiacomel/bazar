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
$stmt = $conn->prepare("INSERT INTO usuario (email,senha) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $senha);

// set parameters and execute
$email = "john@example.com";
$senha = sha1("John");
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>