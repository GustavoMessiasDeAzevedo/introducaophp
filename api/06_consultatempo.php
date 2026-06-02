<?php

require_once "06_consultalaitutelongitude.php";

$apiKey = "5addc547ff6eda4dc3127084a41b7af6";

$cidade = urlencode($_GET['cidade']);

$url = "https://api.openweathermap.org/data/2.5/weather?lat={$latitude}&lon={$longitude}&appid={$apiKey}&units=metric&lang=pt_br";

// $url = "https://api.openweathermap.org/data/2.5/weather?q={$cidade}&appid={$apiKey}&units=metric&lang=pt_br";

$resposta = file_get_contents($url);

if ($resposta !== false) {
    $dados = json_decode($resposta);

    echo "<h1>Consulta Clima</h1>";
    echo "Cidade: " . $dados->name . "<br>";
    echo "Temperatura: " . $dados->main->temp . " °C<br>";
    echo "Sensação térmica: " . $dados->main->feels_like . " °C<br>";
    echo "Umidade: " . $dados->main->humidity . "%<br>";
    echo "Condição: " . $dados->weather[0]->description;

    echo "<br><br>";

    echo "<a href = '06_consultatempobrasil.php'>Voltar</a>";
} else {
    echo "Erro ao consultar a API.";
}
