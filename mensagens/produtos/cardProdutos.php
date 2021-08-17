<div class="card" style="width:400px" appml-data="appml/produtos.js">
    <div appml-repeat="records">  
    <img class="card-img-top" src="ofertados/{{img}}" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">{{titulo}}</h4>
      <p class="card-text">{{descricao}}</p>
      <div class="alert alert-success">
          <strong><h3>{{preco}}</h3></strong>
        </div>
      <a href="#" class="btn btn-primary">Reservar apartir de sexta</a>
    </div>
  </div>
</div>
  <br>
