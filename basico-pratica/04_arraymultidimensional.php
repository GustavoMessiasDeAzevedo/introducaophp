<?php 

$estados = [
    ['SP', 'SÃO PAULO'],
    ['RJ', 'RIO DE JANEIRO'],
    ['MG', 'MINAS GERAIS']
];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array MultiDimensional</title>
</head>
<body>
    <div class="array-multidimensional">
        <?php 
        
            foreach($estados as $estado){
                echo $estado[0] . " - " . $estado[1] . "<br>";
            }

        ?>
    </div>
</body>
</html>