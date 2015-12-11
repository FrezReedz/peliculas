<?php 

include "includes/cabecera.php";
?>
<h2>Crear informe de PERFIL</h2>

<form action="$_SERVER['PHP_SELF']" method="POST">
<table>
	<tr>
		<td><input type="radio" name="tipoinforme" value="TXT"> </td>
		<td><input type="radio" name="tipoinforme" value="E-mail"> </td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="informe"></td>
	</tr>
</table>
</form>

<?php

include "includes/pie.php";
 ?>