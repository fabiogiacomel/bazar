function inserirPedido() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function () {
      document.getElementById("demo").innerHTML = this.responseText;
    }
    xhttp.open("GET", "db/inserirPedido.php");
    xhttp.send();
  }