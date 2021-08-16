
<!DOCTYPE html>
<html>
<body>

<?php
echo '<div class="col-sm-4">';
// echo "<tr><th>Id</th><th>Produto</th><th>img</th><th>Descricao</th><th>Valor R$</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return  parent::current();
    }

    function beginChildren() {
        echo "<h2>";
    }

    function endChildren() {
        echo "</h2>";
    }
}

$servername = "localhost";
$username = "u224722929_bazar";
$password = "cA*di&1lVkZp";
$dbname = "u224722929_bazar";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, titulo, img, descricao, valor FROM produtos");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "  </div>";
?>

</body>
</html>
