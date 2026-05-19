<?php
require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

$ultimaConta = null;

if(isset($_COOKIE["ultimaConta"])){
    $ultimaConta = (int) $_COOKIE["ultimaConta"];
}

session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depósito</title>
</head>

<body>
    <h2>Realizar o Depósito</h2>

    <?php
    if (!isset($_SESSION["contas"]) || count($_SESSION["contas"]) == 0) {
        echo "Nenhuma conta encontrada";
    } else {
    ?>
        <form action="08deposito.php" method="post">
            <label for="conta">Selecione a conta:</label>
            <br><br>

            <select name="indiceConta" id="">
                <?php
                foreach ($_SESSION["contas"] as $indice => $conta) {
                    
                    $selected = "";
                    if($ultimaConta !== null && $ultimaConta ==$indice){
                        $selected = "selected";
                    }
                    echo '
                            <option value= "' . $indice . '" ' . $selected . '>
                                ' . strtoupper($conta->getTipoDeConta()) . ' - Agência: ' . $conta->getAgencia() . ' - Conta ' . $conta->getConta() . '
                            </option>';
                }
                ?>
            </select>

            <br><br>

            <label for="">Valor do depósito</label>
            <br><br>
            <input type="number" name="valor" id="valor" step="0.01" required>
            <br><br>

            <button type="submit">Depositar</button>
        </form>
    <?php
    }
    ?>

    <a href="08menu.html"><button>Voltar ao menu</button></a>

</body>

</html>