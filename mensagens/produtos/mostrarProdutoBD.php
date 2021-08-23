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
  
  $i=0;

  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    if($i == 0) { 
      echo '<h2>'.$v.'</h2></br>';
    }

    if($i == 0) { 
      echo '<img src="ofertados/'.$v.'" class="img-thumbnail mx-auto d-block img-fluid">';
    }

    if($i == 0) { 
      echo '<p>Quantidade: '.$v.'</p>';
    }

    if($i == 0) { 
      echo '<h5>'.$v.'</h5>';
    }

    if($i == 0) { 
      echo '<div class="alert alert-success"><strong><h3>'.$v.'</h3></strong></div>';
    }

    if($i == 0) { 

      echo '<ul class="nav nav-pills flex-column"><li class="nav-item"><a href="?acao=incluir&cod='.$v.'" class="btn btn-primary">Reservar (Começa na sexta)</a></li></ul>';
      echo '</div></br></div>';
    }

    $i++;
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

    
    
      
