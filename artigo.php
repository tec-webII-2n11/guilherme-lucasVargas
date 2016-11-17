<!DOCTYPE html>
<html>
<?php include("include/head.php"); ?>
<?php include("include/header.php"); ?>
<?php include("include/categorias.php");
    include("include/conecta_mysql.php");
    $query="SELECT titulo,texto from artigos WHERE url=?";
    $uri = $_GET["uri"];
	if($stmt = mysqli_prepare($conexao, $query)) {
		mysqli_stmt_bind_param($stmt, "s", $uri);
		mysqli_stmt_execute($stmt);
		mysqli_stmt_bind_result($stmt, $titulo, $texto);
		mysqli_stmt_fetch($stmt);
		mysqli_close($conexao);
	}
	?>

<body>
  <?php 
    if(isset($titulo)){
      ?>
  <section>
    <div class="row">
      <div class="col s12 m12">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <h2>
              <?=$titulo?>
            </h2>
            <p>
              <?=$texto?>
            </p>
          </div>
        </div>
      </div>
  </section>
  <?php
    }
    else {
      include("cadastrarArtigo.php");
    }
    include("include/footer.php");
  ?>
</body>
</html>