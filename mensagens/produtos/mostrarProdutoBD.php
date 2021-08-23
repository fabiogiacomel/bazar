<?php

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return " " . parent::current(). " ";
  }

  function beginChildren() {
    echo "<div>";
  }

  function endChildren() {
    echo "</div>" . "\n";
  }
}

$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM produtos");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</div>";
?>






    
      </br>
      <h2>{{titulo}}</h2>
      <img src="ofertados/{{img}}" class="img-thumbnail mx-auto d-block img-fluid">
      <p>Quantidade: {{qtd}}</p>
      <h5>{{descricao}}</h5>

      <div class="alert alert-success">
        <strong>
          <h3>{{preco}}</h3>
        </strong>
      </div>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="?acao=incluir&cod={{id}}" class="btn btn-primary" onclick="addCarrinho({{id}})">Reservar (Começa na sexta)</a>
          <? # Botao desativado
          #<a class="nav-link active" onclick="document.getElementById('demo').innerHTML=Date()">Eu quero!</a>
          ?>
        </li>
      </ul>
    </div>
    </br>
  </div>