<?php

$nome = "Gustavo Messias";
$dataNascimento = new DateTime('2004-03-26');
$curso = "Técnico em desenvolvimento de sistemas";
$dataAtual = new DateTime();

$idade = $dataNascimento->diff($dataAtual);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>01 Idade</title>
</head>

<body>
    <div class="idade">
        <p>Nome: <?php echo $nome; ?></p>
        <p>Idade: <?php echo $idade->y; ?></p>
        <p>Mês: <?php echo $idade->m ?></p>
        <p>Dias: <?php echo $idade->d ?></p>
        <p>Curso: <?php echo $curso; ?></p>
    </div>
</body>

</html>