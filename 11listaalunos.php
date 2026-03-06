<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'escola_gustavo';

$conexao = new mysqli($servidor, $usuario, $senha, $database);

if($conexao->connect_error){
    die("Conexão falhou: ". $conexao->connect_error);
}

$sql = "SELECT id, nome, idade, uf, cidade FROM alunos";
$resultado = $conexao->query($sql);

if($resultado->num_rows > 0){
    echo "<h2>Lista de alunos da escola Gustavo</h2>";
    while($row = $resultado->fetch_assoc()){
        echo "ID: $row[id] - Nome: $row[nome] - Idade: $row[idade] - UF: $row[uf] - Cidade: $row[cidade]<br><br>";
    }
}