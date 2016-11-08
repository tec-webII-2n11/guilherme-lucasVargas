<!DOCTYPE html>
<html>
<?php 
    include("include/head.php");?>
<?php
  include("include/header.php");
  include("include/categorias.php");
?>
  <div class="container">
    <div class="row">
      <form class="col s12" method="POST" action="cadastrarUsuarios.php">
        <div class="row">
          <div class="input-field col s6">
            <input id="firstName" name="firstName" type="text" class="validate" placeholder="Nome" required>
          </div>
          <div class="input-field col s6">
            <input id="lastName" type="text" name="lastName" class="validate" placeholder="Sobrenome" required>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="password" type="password" name="password" class="validate" placeholder="Senha" required>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="confirmarPassword" type="password" name="confirmarPassword" class="validate" placeholder="Confirmar Senha" required>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" name="email" class="validate" placeholder="E-mail" required>
          </div>
        </div>
        <input class="btn waves-effect waves-light" type="submit" name="action">
      </form>
    </div>
  </div>
</body>
</html>