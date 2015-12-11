<?php


include "includes/funciones.php";

if(!isset($_POST["logear"])){
	include "includes/form_login.php";
}else{
	$errores = [];

	include "includes/validar.php";
}





include "includes/pie.php";
