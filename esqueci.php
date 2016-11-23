<!DOCTYPE html>
<html>
    <?php include("include/head.php"); ?>
    <body>
        
    
     <?php
        include("include/header.php");
        include("include/categorias.php");
    ?>
        <div class="container">
        <h2>Esqueceu sua senha hã!</h2>
        <form action="" method="POST">
            <label for="email">Email</label>
            <input type="text" name="login" required/>
            <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                </button>
        </form>
    </div>
    </body>
</html>