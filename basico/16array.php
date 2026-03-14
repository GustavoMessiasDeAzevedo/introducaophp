<?php 
  $cores = ['Vermelho', 'Amarelo', 'Azul', 'Roxo', 'Preto'] 
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
  </head>
  <body>
    <?php 
      foreach($cores as $cor){
        echo "$cor<br>";
      }
    ?>
  </body>
</html>
