<div appml-data="appml/produtos.js">
  <div class="table table-bordered justify-content-center align-items-center" appml-repeat="records">   
        <div class="text-center">
        </br> 
        <h2>{{titulo}}</h2>
        <img src="ofertados/{{img}}" class="img-thumbnail mx-auto d-block img-fluid">
        <p>Quantidade: {{qtd}}</p>
        <h5>{{descricao}}</h5>
        
        <div class="alert alert-success">
          <strong><h3>{{preco}}</h3></strong>
        </div>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
          <a href="#" class="btn btn-primary" onclick="addCarrinho({{id}})">Reservar (Começa na sexta)</a>
            <? # Botao desativado
               #<a class="nav-link active" onclick="document.getElementById('demo').innerHTML=Date()">Eu quero!</a>
            ?>
          </li>
        </ul>
      </div>
  </br>
</div> 