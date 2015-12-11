<?php
//Estoy recibiendo datos por $_POST
$tam_max = 2 * 1024 * 1024; //declaramos como tam maximo 2 MB 
$carpeta = "./includes/img/fotosperfil/"; 


//Lo primero es comprobar si recibimos algún fichero 
if(!isset($_FILES["foto"])) { 
	$errores["subida"] = "No estoy recibiendo el archivo"; 
}elseif($_FILES["foto"]["size"] == 0) { 

//Si el tamaño es 0, es porque el archivo no se envía al servidor 
//y puede ser porque supera MAX_FILE_SIZE del formulario o de php.ini 
	$errores["subida"] = "No has seleccionado ninguna foto"; 
}elseif($_FILES["foto"]["size"] > $tam_max){ 
	$errores["subida"] = "El archivo no puede superar $tam_max bytes"; 
}elseif($_FILES["foto"]["type"] != 'image/jpeg') { 
	$errores["subida"] = "No se permiten archivos diferentes de jpg"; 
//Esto no es seguro porque sólo comprueba la extensión del fichero. 
} else { 
//Nos podemos fiar sólo en parte 
	$destino = $carpeta . $_SESSION["login_user"] . ".jpg";

	if(move_uploaded_file($_FILES["foto"]["tmp_name"], $destino)) { 
		$errores["subida"] = "Tu archivo ha sido cargado correctamente";
		chmod($destino, "0755"); 
	}else{ 
		$errores["subida"] = "Fallo al cargar el archivo"; 
	} 
}
