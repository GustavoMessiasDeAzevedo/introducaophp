<?php

$servior = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'loja';

$conexao = new mysqli($servior, $usuario, $senha, $database);

if($conexao->connect_error){
    die("Conexão falhou: ". $conexao->connect_error);
}
echo "Conexão bem sucedida!<br><br>";
$sql = "SELECT id, nome, preco FROM produtos";

$resultado = $conexao->query($sql);

if ($resultado->num_rows > 0){
    while($row = $resultado->fetch_assoc()){
        echo "ID: $row[id] - Nome: $row[nome] - Preço: R$ $row[preco]<br><br>";
    }
} else {
    echo "Nenhum produto encontrado.";
}
