<?php
$cepForm = $_POST['cep'];

if (isset($_POST['cep'])) {
    return "CEP não preenchido";
    exit();
}
if (preg_match('/[ .]/', $_POST['cep'])) {
    echo "Contém ponto ou espaço inválido.";
    exit();
}

$url = "viacep.com.br/ws/$cepForm/json/";

$cUrl = curl_init($url);

curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($cUrl);

$cep = json_decode($response);


echo "CEP: " . $cep->cep . "<br>";
echo "Logradouro: " . $cep->logradouro . "<br>";
echo "Bairro: " . $cep->bairro . "<br>";
echo "Cidade: " . $cep->localidade . "<br>";
echo "Estado: " . $cep->estado . "<br>";
echo "Região: " . $cep->regiao . "<br>";

echo "<br>";
echo '<button><a href = "03_consultacep.html">Voltar</a></button>';
