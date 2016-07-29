<?php
ob_start();
if(($_SESSION['usuarioId'] == "") || ($_SESSION['usuarioNome'] == "" ) || ($_SESSION['usuarioNivelAcesso'] == "") || ($_SESSION['usuarioLogin'] == "") || ($_SESSION['usuarioSenha'] == "")){
	unset($_SESSION['usuarioId'],
		$_SESSION['usuarioNome'],
		$_SESSION['usuarioLogin'],
		$_SESSION['usuarioSenha'],
		$_SESSION['usuarioNivelAcesso']);
      //Mensagem de erro
	$_SESSION['loginErro'] = "Área restrita a funcionários cadastrados";
	  //retorna para tela de login
	header("Location: login.php");
}
