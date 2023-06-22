<?php
$servername = "localhost";//padrao, local
$database = "usuarios"; //nome do banco de dados
$username = "root"; //padrao - root
$password = ""; //senha da conexao com o banco

//criar conexao
$conexao = mysqli_connect($servername,$username,$password,$database);

if(!$conexao){
    echo 'nao conectado';
}


?>