<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário basico</title>
</head>
<body>
    <form action="" method="post">

    Nome: <input type="text" name="nome" id="nome"><br><br>
    Idade: <input type="number" name="idade" id="idade"><br><br>

    <input type="submit" value="Enviar">

    <button type="button" onclick="window.location.href=window.location.pathname;">Limpar</button>

    </form>

    <?php 
        if(isset($_POST['nome'])){
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            echo "<h2> Dados recebidos </h2>";
            echo "Nome: {$nome}<br>";
            echo "Idade: {$idade}<br>";
        }
    ?>
</body>
</html>