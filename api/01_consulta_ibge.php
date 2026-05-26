<?php

$url = "https://servicodados.ibge.gov.br/api/v1/localidades/municipios?orderBy=nome";
//inicializa uma sessão curl
//cUrl: inicializa uma biblioteca do php usada para fazer requisições http
$cUrl = curl_init($url);

//configura as opções de da requisição cUrl
//- CURLOPT_RETURNTRANSFER: defini que o resultado da requisição será armazenado em uma variavel
//- TRUE: ativa o comportamento
curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, true);

//executa a requisição
$response = curl_exec($cUrl);

//fecha a conexão url e libera memória do servidor
curl_close($cUrl);

//transforma as informações em objetos que php consegue ler
//transforma o json em um array nomeada
$cidades = json_decode($response);

//percorre array
foreach ($cidades as $cid) {
    echo "<h3>$cid->nome</h3>";
    echo "ID Cidade: " . $cid->id . "<br>";
    if ($cid->microrregiao != null) {
        echo "Microrregião: ";
        echo $cid->microrregiao->nome . "<br>";
        echo "Mesorregião: ";
        echo $cid->microrregiao->mesorregiao->nome . "<br>";
        echo "UF: ";
        echo $cid->microrregiao->mesorregiao->UF->sigla . "<br>";
        echo "Estado: ";
        echo $cid->microrregiao->mesorregiao->UF->nome . "<br>";
        echo "Região: ";
        echo $cid->microrregiao->mesorregiao->UF->regiao->nome . "<br>";
    }

    echo "<br>";
}
