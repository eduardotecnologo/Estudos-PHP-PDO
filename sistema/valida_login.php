<?php
session_start();
    // Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
	header("Location: login.php"); exit;
}
    // Tenta se conectar ao servidor MySQL
mysql_connect('localhost', 'bigcredc_bigcred', '@wiujkh44&&') or trigger_error(mysql_error());
    // Tenta se conectar a um banco de dados MySQL
mysql_select_db('bigcredc_new') or trigger_error(mysql_error());

$user = $_POST['usuario'];
$pass = $_POST['senha'];

    // Validação do usuário/senha digitados
$result = mysql_query("SELECT * FROM usuarios WHERE login ='$user' AND senha='$pass' LIMIT 1");
$resultado = mysql_fetch_assoc($result);
if(empty($resultado)){
	$_SESSION['loginErro'] = "Usuário ou senha inválidos";
	header("Location: login.php");
}else{
	//Define valores atribuidos na sessão usuário
	$_SESSION['usuarioId']   		= $resultado['id'];
	$_SESSION['usuarioNome'] 		= $resultado['nome'];
	$_SESSION['usuarioLogin'] 		= $resultado['login'];
	$_SESSION['usuarioSenha'] 		= $resultado['senha'];
	$_SESSION['usuarioNivelAcesso'] = $resultado['nivel_acesso_id'];

	//Verifica o nivel de acesso
	if($_SESSION['usuarioNivelAcesso'] == 1){
		header("Location: admin.php");
	}else{
		header("Location: user.php");
	}
}
?>