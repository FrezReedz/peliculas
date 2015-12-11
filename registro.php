<?php
include "includes/funciones.php";
include "includes/cabecera.php";

$errores = [];

if(!$_POST) {
	include "includes/formulario.php";

} else {

	include "includes/validar.php";

	if(!$errores){
		
		insertar($correo, $pass1, $nick);


	}else{
		include "includes/formulario.php";
	}


}

include "includes/pie.php";