<!doctype html>
<html lang="pt-br">
<?php include("../admin/include/head.php"); ?>
<body>
    <?php 
    $active = "artigos";
    include("../admin/include/header.php"); 
    include ("../include/conecta_mysql.php");
        $tabela = "<table>
                    <th>Titulo</th>
                    <th>url</th>
                    ";
    $conecta = mysqli_query($conexao, "SELECT * FROM artigos");
    while ($row = mysqli_fetch_array($conecta)){
        $tabela .= "<tr>
                    <td>".$row["titulo"]."</td>
                    <td>".$row["url"]."</td>
                    </tr>";
    }
    echo $tabela;
    ?>
    
</body>

</html>