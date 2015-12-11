<?php

//var_dump($_POST);

//comprobar que se ha enviado post VALIDACIONES PARA REGISTRO
if(isset($_POST["registrar"])){


	//CORREO
	if(($_POST["correo"] != "" ) && ($_POST["correo2"] != "" )){

		if($_POST["correo"] = $_POST["correo2"]){
			$correo = trim($_POST["correo"]);
			if(!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
				$errores['correo'] = "La dirección de correo no es válida.";
			}elseif(buscar_campo("email", $correo) != 0){
			$errores['correo'] = "El correo ya está siendo usado";
			}
		}else{
			$errores["correo"] = "Los correos no coinciden.";
		}
	}else{
		$errores["correo"] = "No has introducido ambos correos.";
	}


	//pass
	if(($_POST["pass1"]!= "") && ($_POST["pass2"] != "")){

		if($_POST["pass1"] == $_POST["pass2"]){
			$pass1 = trim($_POST["pass1"]);
		    if (mb_strlen($pass1) < 6) {
		        $errores["pass1"] = "Contraseña muy corta! (mínimo 6 caracteres)<br>";
		    }

		    if (!preg_match("#[0-9]+#", $pass1)) {
		        $errores["pass1"] = "La contraseña debe contener al menos un número!<br>";
		    }

		    if (!preg_match("#[a-zA-Z]+#", $pass1)) {
		        $errores["pass1"] = "La contraseña debe contener al menos una letra!";
		    }     
		}else{
			$errores["pass1"] = "Las contraseñas no coinciden.";
		}
	}else{
		$errores["pass1"] = "No has introducido ambas contraseñas.";
	}


	//NICK
	if($_POST["nick"] != ""){
		$nick = trim($_POST["nick"]);
		
		if(mb_strlen($nick) < 3) {
			$errores['nick'] = "El Nick es demasiado corto";
		}else if(!preg_match("/^([a-zA-Z0-9áéíóúÁÉÍÓÚüÜñÑ\-\_]){3,29}$/i ", $nick)){
			$errores['nick'] = "El Nick contiene carácteres no permitidos";
		}else if(buscar_campo("nick", $nick) != 0){
			$errores['nick'] = "El Nick ya está siendo usado";
		}
	}else{
		$errores["nick"] = "No has introducido Nick";
	}
}


//VALIDACIONES PARA LOGIN
if(isset($_POST["logear"])){

	if((buscar_campo("nick", $_POST["login"]) == 0 ) && (buscar_campo("email", $_POST["login"]) == 0)){

		$errores["login"] = "Usuario no encontrado en la base de datos.";

	}

	if(buscar_campo("pass", sha1($_POST["contrasenya"])) == 0 ){

		$errores["contrasenya"] = "La contraseña es incorrecta.";

	}
}


