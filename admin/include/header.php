<header>
	<nav>
		<div class="nav-wrapper green darken-3">
		<div class="row">
			<div class="col s1">
				<a href="teste.php" class="brand-logo"><img src="/img/logo.png"></a>
			</div>
			<ul id="nav-mobile" class="hide-on-med-and-down right">
				<li <?= ($active == "artigos" ? 'class="active"' : '') ?> ><a href="listarArtigos.php">Listar Artigos</a></li>
				<li <?= ($active == "usuarios" ? 'class="active"' : '') ?> ><a href="listarUsuarios.php">Listar Usuarios</a></li>
				<li><a href="logout.php">Sair</a></li>
		    </ul>
		</div>
		</div>
	</nav>
</header>