<?php
include 'conexao.php';

$nroproduto = $_POST['numeroProduto'];
$nomeproduto = $_POST['nomeproduto'];
$quantidade = $_POST['quantidade'];
$categoria = $_POST['categoria'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`(`numero_produto`, `nome_produto`, `quantidade_produto`, `categoria_produto`, `fornecedor_produto`) VALUES ($nroproduto,'$nomeproduto',$quantidade,'$categoria','$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>
