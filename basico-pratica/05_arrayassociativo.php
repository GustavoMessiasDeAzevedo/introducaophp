<?php 

    $ceps = ["CEP" => '17502-000', "RUA" => 'Rua 24 de Dezembro', "BAIRRO" => 'Centro', "CIDADE" => 'Marília', "UF" => 'SP'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array Associativo</title>
</head>
<body>
    <div class="array-associativo">
        <p>CEP: <?php echo $ceps['CEP']; ?></p>
        <p>Rua: <?php echo $ceps['RUA']; ?></p>
        <p>Bairro: <?php echo $ceps['BAIRRO']; ?></p>
        <p>Cidade: <?php echo $ceps['CIDADE']; ?></p>
        <p>UF: <?php echo $ceps['UF']; ?></p>
    </div>
</body>
</html>