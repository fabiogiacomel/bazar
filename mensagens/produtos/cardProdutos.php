<div class="card row" appml-data="appml/produtos.js">
    <div class="col" appml-repeat="records">  
    <img class="card-img-top img-thumbnail mx-auto d-block img-fluid" src="ofertados/{{img}}" alt="Card image" style="width:100%">
    <div class="card-body text-center">
      <h4 class="card-title">{{titulo}}</h4>
      <p class="card-text">{{descricao}}</p>
      <div class="alert alert-success">
          <strong><h3>{{preco}}</h3></strong>
        </div>
      <a href="#" class="btn btn-primary">Reservar (Começa na sexta)</a>
    </div>
  </div>
</div>
  <br>
