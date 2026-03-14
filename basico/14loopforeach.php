<?php 
  $cidades = ['Marília', 'Botucatu', 'Araçatuba', 'Lins', 'São Paulo'] 
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
  </head>
  <body>
    <?php 
      foreach($cidades as $cidade){
        echo "$cidade<br>";
      }
    ?>
  </body>
</html>
