<?php 
  $produto = [
    'nome' => 'Guitarra',
    'preco'=> 98.59,
    'estoque' => 50
    
  ]; 

  $produto['preco_formatado'] = "R$ ". number_format($produto['preco'], 2, ',', '.');
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <title>Curso de PHP</title>
  </head>
  <body>
    <?php 

      echo "Nome: $produto[nome] Preço: $produto[preco_formatado] Estoque: $produto[estoque]";
    
    ?>
  </body>
</html>
