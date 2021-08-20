<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Nome:  <input type="text" name="fnome">
  Email: <input type="text" name="femail">
  Fone:  <input type="text" name="ffone">
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

?>

</body>
</html>
