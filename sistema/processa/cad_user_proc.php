<?php
session_start();
include_once("../seguranca.php");
    // Conectar ao servidor MySQL
mysql_connect('localhost', 'bigcredc_bigcred', '@wiujkh44&&') or trigger_error(mysql_error());
    // Conectar a um banco de dados MySQL
mysql_select_db('bigcredc_new') or trigger_error(mysql_error());

$nome 			 = $_POST["nome"];
$email 			 = $_POST["email"];
$usuario 		 = $_POST["usuario"];
$senha 			 = $_POST["senha"];
$nivel_de_acesso = $_POST["nivel_de_acesso"];

//Insere os dados 
$query = mysql_query("INSERT INTO usuarios (nome, email, login, senha, nivel_acesso_id, created) VALUES ('$nome','$email','$usuario','$senha','$nivel_de_acesso', NOW())");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>
<body>
	<!--Mensagem de erro ou Sucesso-->
	<?php
	if(mysql_affected_rows() !=  0){
		echo"
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://bigcredconsig.com/sistema/list_user.php'>
			<script type=\"text/javascript\">
				alert(\"Usuário cadastrado com sucesso!!!\");
			</script>
			";	
		}else{
			echo"
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://bigcredconsig.com/sistema/list_user.php'>
				<script type=\"text/javascript\">
					alert(\"Erro ao cadastrar Usuário!!!\");
				</script>
				";
			}
			?>
		</body>
		</html>