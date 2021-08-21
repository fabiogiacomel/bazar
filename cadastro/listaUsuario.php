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
    $stmt = $conn->prepare("SELECT email FROM usuario WHERE email==$login");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    echo $result;

    if ($result != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!"; exit;
    } else {
        // Salva os dados encontados na variável $resultado
        echo "login valido";
    }


} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>