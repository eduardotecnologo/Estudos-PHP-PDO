<!--Início navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="admin.php">BigCred Financeira</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
					<ul class="dropdown-menu">

						<!--Páginas em Array-->
						<li><a href="admin.php?link=2">Listar</a></li>
						<li><a href="admin.php?link=3">Cadastrar</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">BigCredFinanceira</li>
						<!--Fim - Páginas em Array-->
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Clientes <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="list_cli.php">Listar</a></li>
						<li><a href="cad_cli.php">Cadastrar</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">BigCredFinanceira</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Despesas <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="list_des.php">Listar</a></li>
						<li><a href="cad_des.php">Cadastrar</a></li>
						<li role="separator" class="divider"></li>
						<li class="dropdown-header">BigCredFinanceira</li>
					</ul>
				</li>
				<li><a href="sair.php">Sair</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
