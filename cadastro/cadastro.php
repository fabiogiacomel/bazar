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

  $execSQL = FALSE;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nome = $_POST['fnome'];
    if (empty($nome)) {
      echo "Nome em branco";
      $execSQL = FALSE;
    } else {
      echo $nome;
      $execSQL = TRUE;
    }
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $email = $_POST['femail'];
    if (empty($email)) {
      $execSQL = FALSE;
      echo "Email em Branco";
    } else {
      echo $email;
      $execSQL = TRUE;

    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fone = $_POST['ffone'];
    if (empty($fone)) {
      $execSQL = FALSE;
      echo "Fone em Branco";
    } else {
      echo $fone;
      $execSQL = TRUE;

    }
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $senha = $_POST['senha'];
    if (empty($senha)) {
      $execSQL = FALSE;
      echo "Senha em Branco";
    } else {
      echo $senha;
      $execSQL = TRUE;

    }
  }

$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO usuario (nome, fone, email, senha)  VALUES (:nome, :fone, :email, :senha)");
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':fone', $fone);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', sha1($senha));
  
  
  if($execSQL) {
    $stmt->execute();

    echo "Usuario Cadastrato com Sucesso!!!";
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

?>

</body>

</html>