<?php
session_start();
//include_once("seguranca.php");
    // Tenta se conectar ao servidor MySQL
mysql_connect('localhost', '#', '#') or trigger_error(mysql_error());
    // Tenta se conectar a um banco de dados MySQL
mysql_select_db('#') or trigger_error(mysql_error());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<title>Site</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="theme.css" rel="stylesheet">
	<script src="js/ie-emulation-modes-warning.js"></script>
</head>
<body role="document">
	<?php
	include_once("menu_adm.php");

	$link = $_GET["link"];
	//Array de Página
	$pag[1] = "ben_vindo.php";
	$pag[2] = "list_user.php";
	$pag[3] = "cad_user.php";
	$pag[4] = "visual/visual_user.php";
	$pag[5] = "editar/edita_user.php";

	if(!empty($link)){
		if(file_exists($pag[$link])){
			include $pag[$link];
		}else{
			include "ben_vindo.php";
		}

	}else{
		include "ben_vindo.php";
	}

	//Fim - Array de Página
	?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/docs.min.js"></script>
	<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
