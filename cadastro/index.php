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

  $nome =  $_POST['nome'];
  $fone =  $_POST['fone'];
  $email =  $_POST['email'];
  $senha =  $_POST['senha'];

  echo $nome, $fone, $email, $senha;

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // prepare and bind
  $stmt = $conn->prepare("INSERT INTO usuario (nome, fone, email, senha) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $nome, $fone, $email, $senha);
  $stmt->execute();

  echo "Inserir Usuario";

  $stmt->close();
  $conn->close();

?>

</body>

</html>