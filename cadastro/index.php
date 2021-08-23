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
      <div class="form-group">
        <label for="lblNome">Nome: </label>
        <input type="text" name="fnome"> </br></br>
      </div>
      <div class="form-group">
        <label for="lblEmail">Email: </label>
        <input type="email" name="femail"></br></br>
      </div>
      <div class="form-group">
        <label for="lblFone">Fone: </label>
        <input type="text" name="ffone"></br></br>
      </div>
      <div class="form-group">
        <label for="lblSenha">Senha: </label>
        <input type="password" name="senha"></br></br>
      </div>
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
    $stmt->bindParam(':senha', $senha);


    if ($execSQL) {
      $stmt->execute();

      echo "Usuario Cadastrato com Sucesso!!!";
      if (!isset($_SESSION)) session_start();
        $last_id = $conn->lastInsertId();
        // Salva os dados encontrados na sessão
        $_SESSION["UsuarioID"] = $last_id;
        $_SESSION["UsuarioNome"] = $nome;
       // $_SESSION['UsuarioNivel'] = $resultado['nivel'];
        $_SESSION["UsuarioEmail"] = $email;
  
        echo'<a href="http://bazar.infoceep.com.br" class="btn btn-danger">Faça agora suas reservas!!!</a>';
    }
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  $conn = null;

  ?>


  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">

  </div>

</body>

</html>