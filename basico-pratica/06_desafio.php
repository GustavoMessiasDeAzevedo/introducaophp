<?php
$salarioBruto = 8000.00;
$valorINSS = 0;
$sobra = $salarioBruto;

$faixa1_limite = 1621.00;
$faixa2_limite = 2902.84;   
$faixa3_limite = 4354.27;
$faixa4_limite = 8475.55;

if ($sobra > $faixa1_limite) {
    $valorINSS += $faixa1_limite * 0.075;
    $sobra -= $faixa1_limite;
} else {
    $valorINSS += $sobra * 0.075;
    $sobra = 0;
}

if ($sobra > 0) {
    $largura_faixa2 = $faixa2_limite - $faixa1_limite;
    if ($sobra > $largura_faixa2) {
        $valorINSS += $largura_faixa2 * 0.09;
        $sobra -= $largura_faixa2;
    } else {
        $valorINSS += $sobra * 0.09;
        $sobra = 0;
    }
}

if ($sobra > 0) {
    $largura_faixa3 = $faixa3_limite - $faixa2_limite;
    if ($sobra > $largura_faixa3) {
        $valorINSS += $largura_faixa3 * 0.12;
        $sobra -= $largura_faixa3;
    } else {
        $valorINSS += $sobra * 0.12;
        $sobra = 0;
    }
}

if ($sobra > 0) {
    $largura_faixa4 = $faixa4_limite - $faixa3_limite;
    if ($sobra > $largura_faixa4) {
        $valorINSS += $largura_faixa4 * 0.14;
    } else {
        $valorINSS += $sobra * 0.14;
    }
}

$salarioLiquido = $salarioBruto - $valorINSS;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="desafio">
        <p>Salário Bruto: <?php echo number_format($salarioBruto, 2, ',', '.'); ?></p>
        <p>Valor do INSS: <?php echo number_format($valorINSS, 2, ',', '.'); ?></p>
        <p>Salário Liquído: <?php echo number_format($salarioLiquido, 2, ',', '.'); ?></p>
    </div>

</body>

</html>