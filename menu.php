<!doctype html>
<html lang="pt-br">

<head>
  <title>Formulario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>
  
  <main>

  <div class="container" style="max-width: 500px; margin-top:200px">
    <form action="_inserir_produto.php" method="post">
      <h1 class="">Formulario Crud</h1>
      <div class="mb-3">
        <label class="form-label">Numero do produto</label>
        <input type="number" class="form-control" placeholder="Numero do produto" name="numeroProduto" required autocomplete="off">
        </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nome do produto</label>
        <input type="text" class="form-control" placeholder="escreva o nome do produto" name="nomeproduto" required autocomplete="off">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Quantidade</label>
        <input type="number" class="form-control" placeholder="escreva a quantidade do produto" name="quantidade" required autocomplete="off">
      </div>
      <div class="form-group">
        <label for="fornecedor">Selecione uma dentre as categorias:</label>
          <select class="form-control"  name="categoria">
            <option >categoria1</option>
            <option >categoria2</option>
            <option >categoria3</option>
            <option >categoria4</option>
          </select>
      </div>
      <div class="form-group">
        <label for="fornecedor">Selecione um dentre os fornecedores:</label>
          <select class="form-control" name="fornecedor">
            <option >Fornecedor1</option>
            <option >Fornecedor2</option>
            <option >Fornecedor3</option>
            <option >Fornecedor4</option>
          </select>
      </div>

      <div style="text-align: right;" id="botao">
      <button type="submit" class="btn btn-success sm">Submeter</button>
      </div>
  </form>
</div>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>