<?php
$servior = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'loja';

$conexao = new mysqli($servior, $usuario, $senha, $database);

$nome = $_POST['nome'];
$preco = $_POST['preco'];
$estoque = $_POST['estoque'];

if($nome == "" || $preco < 0 || $estoque < 0 ){
    die("Dados inválidos");
}

if($conexao->connect_error){
    die("Conexão falhou: ". $conexao->connect_error);
}
$sql = "INSERT INTO produtos (nome, preco, estoque) VALUES (?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sdi", $nome, $preco, $estoque);
$stmt->execute();
header("Location: 08_cadastroproduto.html");
exit();
