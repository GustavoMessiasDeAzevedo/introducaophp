<?php
$salarioBruto = 8000.00;
$sobra = $salarioBruto;
$valorINSS = 0;
$i = 0;
$tabela = [
    ['1', 1621.00, 1621.00, 7.50],
    ['2', 2902.84, 1281.84, 9],
    ['3', 4354.27, 1451.43, 12],
    ['4', 8475.55, 4121.28, 14]
];

while($sobra > 0 && $i < count($tabela)){
    if($salarioBruto >= $tabela[$i][1]){
        $valorINSS += $tabela[$i][2] * ($tabela[$i][3]/100);
        $sobra -= $tabela[$i][2];
    }else{
        $valorINSS += $sobra * ($tabela[$i][3]/100);
        $sobra = 0;
    }
    $i++;
}

$salarioLiquido = $salarioBruto - $valorINSS
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio Final</title>
</head>
<body>
    <div class="desafio">
        <p>Salário Bruto: <?php echo number_format($salarioBruto, 2, ',', '.'); ?></p>
        <p>Valor do INSS: <?php echo number_format($valorINSS, 2, ',', '.'); ?></p>
        <p>Salário Liquído: <?php echo number_format($salarioLiquido, 2, ',', '.'); ?></p>
    </div>
</body>
</html>