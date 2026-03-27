<?php 
  $alunos = [
    ['Gustavo', 21, 'Marília', true],
    ['Maria', 19, 'Garça', false],
    ['Julia', 23, 'São Paulo', true]
  ]; 
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
  </head>
  <body>
    <?php 
      for($i = 0; $i < count($alunos); $i++){
        if($alunos[$i][3]){
          echo "Nome: {$alunos[$i][0]} - Idade: {$alunos[$i][1]} - Cidade: {$alunos[$i][2]}";
          echo "<hr>";
        }
      }
    ?>
  </body>
</html>
