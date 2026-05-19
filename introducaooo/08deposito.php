<?php

require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();


if (!isset($_SESSION["contas"])) {
    echo "Nenhuma conta encontrada";
    exit();
}

$indiceConta = $_POST['indiceConta'];
$valor = (float) $_POST['valor'];

$conta = $_SESSION["contas"][$indiceConta];

$conta->deposito($valor);

$_SESSION["contas"][$indiceConta] = $conta;

setcookie("ultimaConta", $indiceConta, time() + 3600);

echo "<h2>Depósito realizado com sucesso</h2>";

?>

<br><br>
<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>