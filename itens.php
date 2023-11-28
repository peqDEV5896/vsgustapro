<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Lista de Itens com Adição Dinâmica</title>
</head>
<body>

  <div class="container mt-5">
    <h2>Adicionar Itens à Lista</h2>
    
    <div class="row">
      <div class="col">
        <input type="text" class="form-control" placeholder="Produto..." id="inputProduto">
      </div>
      <div class="col">
        <input type="text" class="form-control" placeholder="0,00" id="inputValor">
      </div>
      <div class="col">
        <button class="btn btn-success" onclick="adicionarItem()">Adicionar</button>
      </div>
    </div>




    <div class="container mt-3">
      <h2>Lista de Itens</h2>
      <div id="listaItens" class="list-group">
        <!-- Lista de itens será adicionada aqui dinamicamente -->
      </div>
    </div>
    
    <div class="container mt-3" id="totalContainer">
      <h2>Total</h2>
      <div id="total" class="font-weight-bold">R$ 0,00</div>
    </div>
  </div>

  </div>



 



  <!-- Scripts do Bootstrap e jQuery (necessários para alguns recursos do Bootstrap) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src = "pro.js"></script>  
</body>
</html>
