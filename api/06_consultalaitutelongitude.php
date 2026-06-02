<?php

$cidade = urlencode($_GET['cidade']);
$estado = urlencode($_GET['estado']);

if (!isset($_GET['cidade']) || !isset($_GET['estado'])) {
    die("Informe cidade e estado.");
}

$url = "https://nominatim.openstreetmap.org/search?q={$cidade},{$estado},Brasil&format=json&limit=1";

// O Nominatim exige um User-Agent
$opcoes = [
    "http" => [
        "header" => "User-Agent: SistemaConsultaMunicipio/1.0\r\n"
    ]
];

$contexto = stream_context_create($opcoes);

// Faz a requisição
$resposta = file_get_contents($url, false, $contexto);
// $resposta = file_get_contents($url);

// if ($resposta === false) {
//     die("Erro ao consultar a API.");
// }

// Converte o JSON para array PHP
$dadosCoordenadas = json_decode($resposta, true);

// Verifica se encontrou a cidade
if (!empty($dadosCoordenadas)) {

    $latitude = $dadosCoordenadas[0]['lat'];
    $longitude = $dadosCoordenadas[0]['lon'];
} else {

    echo "Município não encontrado.";
}
