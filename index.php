

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
  <style>
    .fakeimg {
      height: 200px;
      background: #aaa;
    }
  </style>
</head>

<body>

  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">
    <h1>1º Bazar de Lixo Eletrônico</h1>
    <?php require 'mensagens/01.php';?>
    
    <p id="demo"></p>
  </div>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="row">
      <!-- Linha -->
      <div class="col">
        <!-- Coluna -->
        <!-- Inserir bCadastro -->
        <?php //require 'modal/bLogin.php';?>
      </div>

      <div class="col">
        <!-- Coluna -->
        <!-- Inserir bCadastro -->
        <?php //require 'modal/bCadastro.php';?>
      </div>

  </nav>


  <?php //require 'modal/mLogin.php';?>

  <?php //require 'modal/mCadastro.php';?>



  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <h2>Monitores</h2>
        <h5>14 polegadas (várias marcas)</h5>
        <img src="ofertados/01.png" class="mx-auto d-block img-fluid">
        <p>Quantidade: 21</p>
        <h3>R$ 25,00</h3>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">Eu quero!</a>
          </li>
        </ul>
      </div>

      <div class="col-sm-4">
        <h2>HD 80 GB</h2>
        <h5>Sata (várias marcas)</h5>
        <img src="ofertados/02.png" class="mx-auto d-block img-fluid">
        <p>Quantidade: 02</p>
        <h3>R$ 10,00</h3>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" onclick="inserirPedido()">Eu quero!</a>
          </li>
        </ul>
      </div>





    </div>
  </div>

  </div>


  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">
  <?php require 'mensagens/02.php';?>
  </div>

  <script src="js/lib.js"></script>
  <script src="js/inserirPedido.js"></script>


</body>

</html>