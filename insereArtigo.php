<?php
    $texto = strip_tags($_POST["texto"]);
    $titulo = strip_tags($_POST["titulo"]);
    $uri = strip_tags($_POST["url"]);
    
    include ("include/conecta_mysql.php");
    $sql = "INSERT INTO artigos (url, titulo, texto) VALUES ('$uri','$titulo','$texto')";
    mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
    mysqli_close($conexao);
    header("location:/artigo/$uri");
?>