<?php
$resultado = mysql_query("SELECT * FROM usuarios ORDER BY 'id'");
$linha = mysql_num_rows($resultado);
?>

<div class="container theme-showcase" role="main">

	<div class="jumbotron text-center">
		<h2>Lista de usuários</h2>
	</div>


	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>
						<th>Email</th>
						<th>Nível de Acesso</th>
						<th>Ações</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while($linhas = mysql_fetch_array($resultado)) {
						echo "<tr>";
						echo "<td>".$linhas['id']."</td>";
						echo "<td>".$linhas['nome']."</td>";
						echo "<td>".$linhas['email']."</td>";
						echo "<td>".$linhas['nivel_acesso_id']."</td>";
						?>
						<td> 
							<!--Btn Visualizar-->
							<a href='admin.php?link=4&id=<?php echo $linhas['id'];?>'>
								<button type='button' class='btn btn-sm btn-primary'>Visualizar</button>
								
								<!--Btn Editar-->
								<a href='admin.php?link=5&id=<?php echo $linhas['id'];?>'>
									<button type='button' class='btn btn-sm btn-warning'>Editar</button>
									
									<!--Btn Apagar-->
									<a href='admin.php?link=6&id=<?php echo $linhas['id'];?>'>
										<button type='button' class='btn btn-sm btn-danger'>Apagar</button>
										<?php
										echo "<tr>";
									}
									?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
