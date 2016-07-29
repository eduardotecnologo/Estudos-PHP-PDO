<div class="container theme-showcase" role="main">

	<div class="jumbotron text-center">
		<h2>Cadastrar Usuários</h2>
	</div>
	<form class="form-horizontal" method="POST" action="processa/cad_user_proc.php" ">
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nome</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="nome" placeholder="Nome Comnpleto">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">E-mail</label>
			<div class="col-sm-5">
				<input type="mail" class="form-control" name="email" placeholder="Digite um e-mail">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Usuario</label>
			<div class="col-sm-5">
				<input type="text" class="form-control" name="usuario" placeholder="Nome de Usuário">
			</div>
		</div>
		<div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
			<div class="col-sm-5">
				<input type="password" class="form-control" name="senha" placeholder="Digite uma Senha">
			</div>
		</div>
		<div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Nível de Acesso</label>
			<div class="col-sm-2">
				<select class="form-control" name="nivel_de_acesso">
					<option value="1">Administrador</option>
					<option value="2">Usuário</option>
				</select>
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-success">Cadastrar</button>
			</div>
		</div>
	</form>
</div>
