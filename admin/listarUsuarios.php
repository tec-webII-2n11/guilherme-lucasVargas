<!doctype html>
<html lang="pt-br">
<?php include("../admin/include/head.php");?>
<body>
    <?php 
    $active = "usuarios";
    include("../admin/include/header.php"); 
    include ("../include/conecta_mysql.php");
    $tabela = "<table>
                    <th>Nome</th>
                    <th>email</th>
                    ";
    
    $conecta = mysqli_query($conexao, "SELECT * FROM usuarios");
    while ($row = mysqli_fetch_array($conecta)){
        $tabela .= "<tr>
                    <td>".$row["nome"]."</td>
                    <td>".$row["email"]."</td>
                    </tr>";
    }
    
    ?>
</body>
    <?=$tabela?>
</html>