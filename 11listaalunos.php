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
// if($resultado->num_rows > 0){
//     echo "<h2>Lista de alunos da escola Gustavo</h2>";
//     while($row = $resultado->fetch_assoc()){
//         echo "ID: $row[id] - Nome: $row[nome] - Idade: $row[idade] - UF: $row[uf] - Cidade: $row[cidade]<br><br>";
//     }
// }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Escola Gustavo</title>
</head>
<body>
    <main class="estiloFront">
        <header class="estiloHeader">
            <h1>Bem vindo</h1>
            <h2>Lista de alunos escola Gustavo</h2>
        </header>

        <div class="grid">
            <?php foreach($resultado as $alunos): ?>
                <div class="card">
                    <div class="cardHeader">
                    <h3 class="id">Identificação: <?php echo htmlspecialchars($alunos['id']); ?></h3>
                    <span class="uf">UF: <?php echo htmlspecialchars($alunos['uf']); ?></span>
                    <p class="nome"><?php echo htmlspecialchars($alunos['nome'])?></p>
                    <p class="cidade"><?php echo htmlspecialchars($alunos['cidade']) ?></p>
                </div>
                    
            </div><?php endforeach; ?>
                
        </div>
    </main>
</body>
</html>
