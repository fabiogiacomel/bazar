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

  <?php

  if (!isset($_SESSION)) session_start();

  $servername = "localhost";
  $username = "u224722929_bazar";
  $password = "cA*di&1lVkZp";
  $dbname = "u224722929_bazar";

  $execSQL = TRUE;

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare("INSERT INTO acesso (ip, idSessao, data, cookie, hora) VALUES (:ip, :idSessao, :data, :cookie, :hora)");
    $stmt->bindParam(':ip', $ip);
    $stmt->bindParam(':idSessao', $idSessao);
    $stmt->bindParam(':data', $data);
    $stmt->bindParam(':cookie', $cookie);
    $stmt->bindParam(':hora', $hora);

    $ip = $_SERVER["REMOTE_ADDR"];
    $idSessao = session_id();
    $data = date('d/m/Y');
    $cookie = $_COOKIE["PHPSESSID"];
    $hora = date('H:i:s');

    if ($execSQL) $stmt->execute();

    //echo "Usuario Cadastrato com Sucesso!!!";
  } catch (PDOException $e) {
    //echo "Error: " . $e->getMessage();
  }
  $conn = null;

  $acao = $_GET['acao'];
  $cod =  $_GET['cod'];

  // Verificamos se a acao é igual a incluir
  if ($acao == "incluir") {

    require 'db/inserirPedido.php';
    // Verificamos se cod do produto é diferente de vazio
    if ($cod != '') {
      // Se for diferente de vazio verificamos se é numérico
      if (is_numeric($cod)) {
        // Tratamos a variavel de caracteres indevidos
        $cod = addslashes(htmlentities($cod));
      }
    }
  } 
  ?>

  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">
    <h1>1º Bazar On-line de Informática </h1>
<?php
    if($_SESSION['UsuarioNome'] == ''){
    echo '<a href="http://bazar.infoceep.com.br/cadastro/" class="btn btn-warning">Cadastrar</a>';
  }else{
    echo '<a href="http://bazar.infoceep.com.br/cadastro/logout.php" class="btn btn-warning">Sair</a>';

  }
  ?>
    <p><?php echo $_SESSION['UsuarioNome']; ?>!</p>

 </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="row">
      <!-- Linha -->
      <div class="col">
        <!-- Coluna -->
        <!-- Inserir bCadastro -->
        <?php //require 'modal/bLogin.php';
        ?>
      </div>

      <div class="col">
        <!-- Coluna -->
        <!-- Inserir bCadastro -->
        <?php //require 'modal/bCadastro.php';
        ?>
      </div>

  </nav>


  <?php //require 'modal/mLogin.php';
  ?>

  <?php //require 'modal/mCadastro.php';
  ?>



  <div class="container-fluid">

    <?php require 'mensagens/m01.php'; ?>

    <?php require 'mensagens/produtos/mostrarProdutoBD.php'; ?>
  </div>


  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">
    <?php require 'mensagens/02.php'; ?>
  </div>

</body>

</html>