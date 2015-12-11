<?php
include "includes/funciones.php";
include "includes/cabecera.php";


if(isset($_SESSION["login_user"])){
	echo "<h2>Usted ya se encuentra logeado</h2>";
	?>
	<h2><a href="logout.php">Log-out</a></h2>
	<?php
}else{

	$errores = [];

	if(!isset($_POST["logear"])){
		include "includes/form_login.php";
	}else{
		

		include "includes/validar.php";
		if(!$errores){
			$login_nick = recuperar_usuario($_POST["login"]);
			$_SESSION["login_user"] = trim($login_nick["nick"]);
			include "includes/login_correcto.php";
		}else{
			include "includes/form_login.php";
		}
	}
}




include "includes/pie.php";