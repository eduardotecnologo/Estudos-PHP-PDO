<?php
session_start();
session_destroy();
//Remove os dados
unset($_SESSION['usuarioId'],
	$_SESSION['usuarioNome'],
	$_SESSION['usuarioLogin'],
	$_SESSION['usuarioSenha'],
	$_SESSION['usuarioNivelAcesso']);
//Retorna para login
header("Location: login.php")
?>