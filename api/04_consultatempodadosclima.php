<?php

require_once "06_consultatempo.php";

echo "<h1>Consulta Clima</h1>";
echo "Cidade: " . $dados->name;
echo "Temperatura: " . $dados->main->temp . " °C<br>";
echo "Sensação térmica: " . $dados->main->feels_like . " °C<br>";
echo "Umidade: " . $dados->main->humidity . "%<br>";
echo "Condição: " . $dados->weather[0]->description;

?>
