<?php 
  $aluno = [
    'nome' => 'João',
    'idade'=> 18,
    'cidade' => 'Márilia',
    'ativo' => true
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
      if($aluno['ativo']){
        echo "Nome: $aluno[nome] Idade: $aluno[idade] Cidade: $aluno[cidade]";
      }
    ?>
  </body>
</html>
