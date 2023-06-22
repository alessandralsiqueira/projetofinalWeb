<?php 
include 'conexao.php';
include 'script/password.php';

$nomeUsuario = $_POST['nomeUsuario'];
$email = $_POST['email'];
$senha = $_POST['Senha'];

$sql = "INSERT INTO usuarios(nome, email, senha) values ('$nomeUsuario','$email',sha1('$senha'))";

$inserir = mysqli_query($conexao, $sql);


?>

 <!-- Bootstrap CSS v5.2.1 -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<div class="container" style="width:400px">

<h3>Adicionado com sucesso</h3>
<div style="margin-top: 10px;">
    <a href="cadastro_usuario.php" class="btn btn-sm btn-warning" style=" color: #fff">Voltar</a>
</div>

</div>