<div class="col-sm-4"  appml-data="appml/produtos.js">
    <div appml-repeat="records">    
        <h2>{{titulo}}</h2>
        <h5>{{descricao}}</h5>
        <img src="{{img}}" class="mx-auto d-block img-fluid">
        <p>Quantidade: 10</p>
        <h3>R$ 5,00</h3>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link active" onclick="document.getElementById('demo').innerHTML=Date()">Eu quero!</a>
          </li>
        </ul>
      </div>