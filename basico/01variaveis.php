<?php 
  $nome= "Gustavo";
  $idade = 21;
  $altura = 1.78;
  $ativo = true;

?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Declaração de Variáveis</title>
  </head>
  <body>
    <?php 
      echo "<br>Nome: $nome";
      echo "<br>Idade: $idade";
      echo "<br>Altura: $altura";
      echo "<br>Ativo: $ativo";
    ?>
  </body>
</html>
