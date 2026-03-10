<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
  </head>
  <body>
    <p>Olá, hoje é dia <br> <?php 
    date_default_timezone_set('America/Sao_Paulo');
    echo date('d/m/Y');
    $teste = 1;
    echo 'A caixa d\'água esta vazia.\\ $teste<br>';
    echo 'A caixa d\'água esta vazia.\\ '.$teste; 
    $litros = "1000L";
    echo "A caixa d'água é de $litros"?></p>
  </body>
</html> 
