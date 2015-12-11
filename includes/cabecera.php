<?php 
session_start();
include_once "includes/funciones.php";

if(isset($_SESSION["login_user"])){
	$usuario =  recuperar_usuario($_SESSION["login_user"]);
}

if (!isset($_SESSION["tema"])) {
	$_SESSION["tema"] = "";
}
?>

<!DOCUTYPE html>
<html lang="es">
	<head>
		<title>PelisDAW</title>
		<?php cargar_estilo(); ?>
		<meta charset="utf8">
		<link href='https://fonts.googleapis.com/css?family=Exo' rel='stylesheet' type='text/css'>
	</head>

	<body>
	<div class="container">
		<header>
			<div class="topbar">
				<?php cargar_topbar();?>		
			</div>
			<p class="header">
				<a href="index.php" ><img class="logo"src="includes/img/php-logo.png"></a>
				<?php fotoicon(); ?>
				PelisDAW
			</p>
			<?php include "includes/nav.php"; ?>
		</header>

		<div class="cuerpo">
		<aside>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
		</aside>
		
		<section>
			
	