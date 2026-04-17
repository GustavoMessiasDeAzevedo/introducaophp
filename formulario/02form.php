<?php
if(isset($_POST['nome'])){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo "<h2>Dados Recebidos</h2>";
    echo "Nome: {$nome} <br><br>"; 
    echo "Idade: {$idade} <br><br>"; 
    
    echo '<a href="02form.html">Voltar</a>';
}else{
    echo "Acesso inválido";
}