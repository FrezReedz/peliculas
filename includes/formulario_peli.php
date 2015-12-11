<form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="POST">
	<h3>Añade una nueva película</h3>
	<table class="login">
		<tr>
			<th colspan="2">
				Todos los campos son obligatorios
			</th>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="nombre">Nombre</label></td>
			<td><input type="text" name="nombre" <?php recordar("nombre"); ?> >
			<span class="errorform"><?php mostrar_error("nombre", $errores); ?></span></td>
		</tr>
		<tr>
			<td><label for="anyo">Año</label></td>
			<td><input type="text" name="anyo" <?php recordar("anyo"); ?> >
				<span class="errorform"><?php mostrar_error("anyo", $errores); ?></span></td>
		</tr>
		<tr>
			<td><label for="genero">Género</label></td>
			<td>
				<select name="genero" id="">
					<?= recuperar_genero() ?>
				</select>
				<span class="errorform"><?php mostrar_error("genero", $errores); ?></td>
		</tr>
		<tr><td colspan="2" style="text-align:center;">--</td></tr>
		<tr>
			<td><label for="sinopsis">Sinopsis</label></td>
			<td> <textarea name="sinopsis" id="" cols="30" rows="10" <?php recordar("sinopsis"); ?> ></textarea>
				<span class="errorform"><?php mostrar_error("sinopsis", $errores); ?></td>
		</tr>
		<tr>
			<td><input type="submit" name="anade_peli" value="Añadir"></td>
			<td><input type="reset" value="Borrar"></td>
		</tr>
	</table>
</form>

<form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="POST">
	<table class="login">
	<th colspan="2">Añade nuevo género</th>
	<tr>
		<td><label for="nombre_genero">Nombre</label></td>
		<td><input type="text" name="nombre_genero" <?php recordar("nombre_genero"); ?> >
			<span class="errorform"><?php mostrar_error("nombre_genero", $errores); ?></span></td>
	</tr>
	<tr>
		<td><input type="submit" name="anade_genero" value="Añadir"></td>
		<td><input type="reset" value="Borrar"></td>
	</tr>
</form>


	