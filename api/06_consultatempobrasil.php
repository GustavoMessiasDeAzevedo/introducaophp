<?php

$estados = json_decode(
    file_get_contents("https://servicodados.ibge.gov.br/api/v1/localidades/estados")
);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta Clima</title>
</head>

<body>

    <h1>Consulta Clima</h1>

    <form method="GET">

        <label>Estado:</label>

        <select name="estado">

            <option value="">Selecione</option>

            <?php foreach ($estados as $estado): ?>

                <option
                    value="<?= $estado->sigla ?>"
                    <?= (isset($_GET['estado']) && $_GET['estado'] == $estado->sigla) ? 'selected' : '' ?>>

                    <?= $estado->nome ?>

                </option>

            <?php endforeach; ?>

        </select>

        <button type="submit">
            Carregar cidades
        </button>

    </form>

    <?php

    if (isset($_GET['estado']) && !empty($_GET['estado'])) {

        $uf = $_GET['estado'];

        $cidades = json_decode(
            file_get_contents(
                "https://servicodados.ibge.gov.br/api/v1/localidades/estados/$uf/municipios"
            )
        );

    ?>

        <hr>

        <form action="06_consultatempo.php" method="GET">

            <input type="hidden" name="estado" value="<?= $uf ?>">

            <label>Cidade:</label>

            <input list="cidades" name="cidade" required>

            <datalist id="cidades">

                <?php foreach ($cidades as $cidade): ?>

                    <option value="<?= $cidade->nome ?>">

                    <?php endforeach; ?>

            </datalist>

            <button type="submit">
                Consultar clima
            </button>

        </form>

    <?php } ?>

</body>

</html>