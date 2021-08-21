<html>
<body>
<p> Seu pedido </p>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nome: <input type="text" name="fnome">
    Email: <input type="text" name="femail">
    Fone: <input type="text" name="ffone">
    Senha: <input type="text" name="senha">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nome = $_POST['fnome'];
    if (empty($nome)) {
      echo "Nome em branco";
    } else {
      echo $nome;
    }
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_POST['femail'];
    if (empty($email)) {
      echo "Email em Branco";
    } else {
      echo $email;
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fone = $_POST['ffone'];
    if (empty($fone)) {
      echo "Fone em Branco";
    } else {
      echo $fone;
    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $senha = $_POST['senha'];
    if (empty($senha)) {
      echo "Senha em Branco";
    } else {
      echo $senha;
    }
  }

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
$stmt = $conn->prepare("INSERT INTO usuario (nome, fone, email,senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $fone, $email, $senha);

// set parameters and execute
$idSessao = $a;
//$idProduto = 10;
$ip = $_SERVER["REMOTE_ADDR"];
$cookie = $_COOKIE["PHPSESSID"];
$data = date('d/m/Y');
$stmt->execute();

echo "Produto inserio no Pedido";

$stmt->close();
$conn->close();

?>

</body>

</html>