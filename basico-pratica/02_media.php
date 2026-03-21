<?php
$nota1 = 3.0;
$nota2 = 2.5;
$nota3 = 1.4;

$media = ($nota1 + $nota2 + $nota3) / 3;

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>02 Media</title>
</head>

<body>
    <div class="media">
        <p>
            <?php
            if ($media >= 7.0) {
                echo "Aprovado";
            } else if ($media >= 5.0 && $media < 7.0) {
                echo "Em recuperação";
            } else {
                echo "Reprovado";
            }
            ?>
        </p>
    </div>

</body>

</html>