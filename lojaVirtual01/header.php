<?php
require_once"require/class/Crud.class.php";
require_once"require/config/Config.php";

$urlAmigavel=new UrlAmigavel;
$returnUrlAmigavel=$urlAmigavel->setUrlAmigavel(REDIRECT_URL);

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Loja Virtual 01</title>
	<link rel="stylesheet" type="text/css" href="require/css/header.css"/>
	<script type="text/javascript" src="require/js/jquery.js"></script>
	<script type="text/javascript" src="require/js/login.js"></script>
</head>
<body>
	<div id="dvBase">
		<header>

		</header>
		<main>
