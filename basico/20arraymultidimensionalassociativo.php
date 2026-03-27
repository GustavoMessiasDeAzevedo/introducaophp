<?php
$alunos = [
  ["nome"=>'Gustavo', "idade"=>21, "cidade"=>'Marília', "ativo"=>true],
  ["nome"=>'Maria', "idade"=>19, "cidade"=>'Garça', "ativo"=>false],
  ["nome"=>'Julia', "idade"=>23, "cidade"=>'São Paulo', "ativo"=>true]
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
  for ($i = 0; $i < count($alunos); $i++) {
    if ($alunos[$i][3]) {
      echo "Nome: {$alunos[$i]["nome"]} - Idade: {$alunos[$i]["idade"]} - Cidade: {$alunos[$i]["cidade"]}";
      echo "<hr>";
    }
  }
  ?>
</body>

</html>