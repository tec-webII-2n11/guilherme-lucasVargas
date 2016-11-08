<?php
    $firstName = strip_tags($_POST["firstName"]);
    $lastName =  strip_tags($_POST["lastName"]);
    $password = sha1(strip_tags($_POST["password"]));
    $confirmarPassword = sha1(strip_tags($_POST["confirmarPassword"]));
    $email = strip_tags($_POST["email"]);
    
    include ("include/conecta_mysql.php");
    
    $sqlCheckEmail = "SELECT email FROM usuarios WHERE email = '$email'"; //selecion para pegar o Email do DB
    $checkingEmail = mysqli_query($conexao, $sqlCheckEmail);
    $arrayEmail = mysqli_fetch_array($checkingEmail); //pega o resultado da conexao com o comando SQL e salva como Array
    $emailToBeChecked = $arrayEmail['email']; //extrai do Array o campo 'email'

    if ($emailToBeChecked == $email){
        $mensagem = 'O email já foi cadastrado, tente outro.';
    }
    else if((empty($firstName)) or strstr($firstName, ' ') == true){
        $mensagem = 'Digite um nome válido';
    }
    else if((empty($lastName)) or strstr($lastName, ' ') == true){
        $mensagem = 'Digite um sobrenome válido';
    }
    else if((empty($email)) or strstr($email, ' ') == true or strstr($email, '@') == FALSE){
        $mensagem = 'Digite um email, ele será seu login';
    }
    else if($confirmarPassword != $password){
        $mensagem = 'As senhas não coincidem';
    }
    else{
        $firstName = $firstName.' '.$lastName;
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$firstName','$email','$password')";
        $resultado = mysqli_query($conexao, $sql) or die("Não foi possível executar a SQL: ".mysqli_error($conexao));
        $mensagem = "Bem-vindo ao Mackpedia! O seu login é ".$email;
        $success = true;
    }
    mysqli_close($conexao);
?>

<!DOCTYPE html>
<html>
    <?php include("include/head.php");
    ?>
    
    <body>
        <?php include("include/header.php"); ?>
        <?php include("include/categorias.php"); ?>
        
	    <?php 
	        if(isset($success)){
	            $cor = " green darken-3";
	        }
	        else{
	            $cor = " red darken-3";
	        }
	    ?>
	    <br>
	    <div class="card-panel<?=$cor;?>">
	        <?=$mensagem;?>
	    </div>
        <?php 
        include("include/footer.php");
        ?>
    </body>
</html>