<?php

if(isset($_POST['titulo'])){
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $paginas = $_POST['paginas'];
    $lancamento = $_POST['lancamento'];
    $dataFormatada = $lancamento ? date('d/m/Y', strtotime($lancamento)) : "Não informada";
    $categoria = ucfirst($_POST['categoria']);
    $formato = ucfirst($_POST['formato']);
    $extras = isset($_POST['extras']) ? $_POST['extras'] : "Nenhum"; 
    $link_compra = $_POST['link_compra'];
    $cor_capa = $_POST['cor_capa'];
    $sinopse = $_POST['sinopse'];

    echo "<div style='font-family: sans-serif; max-width: 500px; margin: 30px auto; padding: 20px; border: 1px solid #ddd; border-left: 8px solid {$cor_capa}; border-radius: 4px; background: #fafafa;'>";
        echo "<h2 style='color: #333; margin-top: 0;'>📚 Livro Cadastrado!</h2>";
        echo "<p><strong>Título:</strong> {$titulo}</p>";
        echo "<p><strong>Autor:</strong> {$autor}</p>";
        echo "<p><strong>Páginas:</strong> {$paginas}</p>";
        echo "<p><strong>Lançamento:</strong> {$dataFormatada}</p>";
        echo "<p><strong>Gênero:</strong> {$categoria}</p>";
        echo "<p><strong>Formato:</strong> {$formato}</p>";
        echo "<p><strong>Extras:</strong> {$extras}</p>";
        echo "<p><strong>Link:</strong> <a href='{$link_compra}' style='color: #0066cc;'>Acessar</a></p>";
        echo "<p><strong>Sinopse:</strong> <em>" . nl2br($sinopse) . "</em></p>";
        echo "<br>";
        echo "<a href='03tiposdados.html' style='color: #333; text-decoration: none; font-weight: bold;'>← Voltar</a>";
    echo "</div>";
} else {
    echo "<div style='font-family: sans-serif; text-align: center; color: red; margin-top: 50px;'><h3>Acesso inválido!</h3></div>";
}
?>