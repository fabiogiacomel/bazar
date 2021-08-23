<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <title>Bazar CEEP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://www.w3schools.com/appml/2.0.3/appml.js"></script>
  <!-- <link href="img/ceep-touch-icon.jpg" rel="apple-touch-icon"> -->
</head>

<body>
<div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">
    <h1> Cadastro </h1>
    </div>
    <div class="container-fluid">


  </br></br>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nome:   <input type="text" name="fnome"> </br></br>
    Email:  <input type="text" name="femail"></br></br>
    Fone:   <input type="text" name="ffone"></br></br>
    Senha:  <input type="text" name="senha"></br></br>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
  </br></br>
  </div>

  <?php

  $execSQL = FALSE;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $nome = $_POST['fnome'];
    if (empty($nome)) {
      echo "Nome em branco";
      $execSQL = FALSE;
    } else {
      //echo $nome;
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
      //echo $email;
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
      //echo $fone;
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
      //echo $senha;
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


  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">

  </div>

</body>

</html>