<?php

$horaEntrada = new DateTime('10:30:00');
$horaSaida = new DateTime('19:45:00');

$horasTrabalhadas = $horaEntrada->diff($horaSaida);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Horas trabalhadas</title>
</head>

<body>
    <div class="calculo-horas">
        <p>Horas trabalhadas: <?php echo $horasTrabalhadas->format('%H:%I:%S'); ?></p>
    </div>

</body>

</html>