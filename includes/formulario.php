<form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="POST">
	<h3>Resgistro nuevo usuario</h3>
	<p class="centrado"><a href="index.php">Volver a Portada</a></p>
	<table class="login">
		<tr>
			<th colspan="2">
				Todos los campos son obligatorios
			</th>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="correo">Correo electrónico</label></td>
			<td><input type="email" name="correo" <?php recordar("correo"); ?> >
			<span class="errorform"><?php mostrar_error("correo", $errores); ?></span></td>
		</tr>
		<tr>
			<td><label for="correo2">Repita el correo</label></td>
			<td><input type="email" name="correo2" >
				<span class="errorform"></td>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="pass">Escriba su contraseña</label></td>
			<td><input type="password" name="pass1" value="">
				<span class="errorform"><?php mostrar_error("pass1", $errores); ?></td>
		</tr>
		<tr>
			<td><label for="pass2">Repita su contraseña</label></td>
			<td><input type="password" name="pass2" value=""></td>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="nick">Nick</label></td>
			<td><input type="text" name="nick" <?php recordar("nick"); ?> >
				<span class="errorform"><?php mostrar_error("nick", $errores); ?></td>
		</tr>
		<tr>
			<td><input type="submit" name="registrar" value="Registrar"></td>
			<td><input type="reset" value="Borrar"></td>
		</tr>
	</table>
</form>

	