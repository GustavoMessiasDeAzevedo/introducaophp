<?php
require_once("08conta.php");
require_once("08poupanca.php");
require_once("08especial.php");
require_once("08itemExtrato.php");

session_start();

if (!isset($_SESSION['contas'])) {
    echo "Conta não encontrada";
    exit();
}

$indiceConta = $_POST['indiceConta'];
$contaTransferencia = $_POST['indiceContaTransferencia'];
$valor = (float)$_POST['valor'];

if($indiceConta == $contaTransferencia){
    echo "Não são permitidas transferências para a mesma conta";
    exit();
}
$conta = $_SESSION['contas'][$indiceConta];
$transferencia = $_SESSION['contas'][$contaTransferencia];

if($valor > $conta->saldo()){
    echo "Saldo insuficiente";
    exit();
}

$conta->saque($valor);
$_SESSION["contas"][$indiceConta] = $conta;
setcookie("ultimaConta", $contaTransferencia, time() + 3600);

$transferencia->deposito($valor);
$_SESSION["contas"][$contaTransferencia] = $transferencia;
setcookie("ultimaConta", $contaTransferencia, time() + 3600);

echo "<h2>Transferência realizada com sucesso</h2>";

?>

<br><br>
<a href="08menu.html">
    <button>Voltar ao Menu</button>
</a>


