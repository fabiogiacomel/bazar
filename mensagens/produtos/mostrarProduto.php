<div appml-data="appml/produtos.js">
    <div appml-repeat="records">    
        <h2>{{titulo}}</h2>
        <img src="ofertados/{{img}}" class="mx-auto d-block img-fluid">
        <p>Quantidade: 10</p>
        <h5>{{descricao}}</h5>
        <h3>{{preco}}</h3>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <? # Botao desativado
               #<a class="nav-link active" onclick="document.getElementById('demo').innerHTML=Date()">Eu quero!</a>
            ?>
          </li>
        </ul>
      </div>