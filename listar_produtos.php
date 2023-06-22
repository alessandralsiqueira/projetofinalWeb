<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Lista de Produtos</title>
</head>
<body>
    <div class="container" style="margin-top: 40px;">
    <h2>Lista de Produtos</h2>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Numero produto</th>
        <th scope="col">Nome produto</th>
        <th scope="col">Categoria</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Fornecedor</th>
        <th scope="col">ação</th>
        </tr>
    </thead>
    
        <?php 
        include 'conexao.php';

        $sql = "SELECT * FROM `estoque`";
        $busca = mysqli_query($conexao, $sql);

        while($array = mysqli_fetch_array($busca)){
            
            $id_estoque = $array['id_estoque'];
            $nroproduto = $array['numero_produto'];
            $nomeproduto = $array['nome_produto'];
            $quantidade = $array['quantidade_produto'];
            $categoria = $array['categoria_produto'];
            $fornecedor = $array['fornecedor_produto'];

        

        ?>

        <tr>
            <td><?php echo $nroproduto ?></td>
            <td><?php echo $nomeproduto ?></td>
            <td><?php echo $quantidade ?></td>
            <td><?php echo $categoria ?></td>
            <td><?php echo $fornecedor ?></td>
            <td><?php echo 'teste' ?></td>
        </tr>

        <?php
        } 
        ?>
        
    
    
</table>



    </div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

</body>
</html>