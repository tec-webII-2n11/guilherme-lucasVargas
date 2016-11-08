<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>
<body>
  <?php
    include("include/header.php");
    include("include/categorias.php");
  ?>
  <div class="container">
    <div class="row">
      <form class="col s12" action="include/verificaLogin.php" method="POST">
        <div class="row">
          <div class="input-field col s12">
            <input name="email" placeholder="E-mail" type="email" class="validate" required>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">'
            <input id="password" placeholder="Password" name="password" type="password" class="validate" required>
          </div>
        </div>
        <input class="btn waves-effect waves-light" type="submit" name="action"/>
      </form>
      <a href="cadastro.php">Cadastre-se</a>
      <br>
      <a href="esqueci.php">Esqueci minha senha</a>
    </div>
  </div>
</body>
</html>