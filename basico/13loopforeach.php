<?php 
  $nomes = ['Gustavo', 'Maria', 'Bianca'] 
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
  </head>
  <body>
    <?php 
      foreach($nomes as $nome){
        echo "$nome<br>";
      }
    ?>
  </body>
</html>
