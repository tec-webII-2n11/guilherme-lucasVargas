<!DOCTYPE html>
<html>
    <?php include("include/head.php"); ?>
    <body>
        <img src=""></img> <!-- Logo -->
        
        <h1>Cadastre-se</h1>
        <form>
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome"/><br>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf"/><br>
            <label for="email">Email:</label>
            <input type="email" name="email"/><br>
            <label for="conf_email">Confirmar E-mail:</label>
            <input type="email" name="conf_email"/><br>
            <label for="sexo">Sexo:</label>
            <select name="sexo">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select><br>
            <label for="data_nasc">Data Nascimento:</label>
            <input type="date" name="data_nasc" value="1950-01-01" /><br>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>