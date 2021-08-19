

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
 <script>
  function addCarrinho1(id) {
    document.getElementById("carrinho").innerHTML = id;
  }
  </script>

<script>
const id = [];
document.getElementById("carrinho").innerHTML = id;

function addCarrinho(id){
  id.push(id);
  document.getElementById("carrinho").innerHTML = id;
}
</script>

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
    <?php #require 'mensagens/01.php';?>
    
    <p id="carrinho"></p>
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



  <div class="container-fluid">

  <?php require 'mensagens/m01.php';?>

  <?php require 'mensagens/produtos/mostrarProduto.php';?>

  <?php #require 'mensagens/produtos/cardProdutos.php';?>

    

  </div>


  <div class="jumbotron text-center bg-success text-white" style="margin-bottom:0">
  <?php require 'mensagens/02.php';?>
  </div>

  <script src="js/lib.js"></script>
  <script src="js/inserirPedido.js"></script>

</body>

</html>