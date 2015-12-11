<?php 

include "includes/cabecera.php";
?>
<h2>Crear informe de PERFIL</h2>

<form action="$_SERVER['PHP_SELF']" method="POST">
<table class="login">
	<tr><td><input type="radio" name="tipoinforme" value="txt">TXT</td></tr>
	<tr><td><input type="radio" name="tipoinforme" value="mail">e-Mail</td></tr>
	<tr><td colspan="2"><input type="submit" name="informe" value="Generar informe"></td></tr>
</table>
</form>

<?php







include "includes/pie.php";
 ?>