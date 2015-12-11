<?php

include "includes/cabecera.php";

if (($usuario["rol"] == "normal") || !isset($usuario)) {
?>

<h1>Área restringida hijo de puta</h1>

<?php
}else if($usuario["rol"] == "admin"){
	include "includes/formulario_peli.php";
?>


<table class="login">
	<tr><th colspan="6">Borrar y editar películas</th></tr>
	<tr>
		<th>Nombre</th>
		<th>Año</th>
        <th>Género</th>
        <th>ID</th>
        <th>Editar</th>
        <th>Borrar</th>
	</tr>

<?php
$conex = conexion();

$consulta = "SELECT * FROM pelicula";
$res = mysqli_query($conex, $consulta);


while($fila = mysqli_fetch_array($res)){
 ?>
        <tr>
            <td><?=ucwords(strtolower($fila["nombre"]))?></td>
            <td><?=ucwords(strtolower($fila["anyo"]))?></td>
            <td><?=ucwords(strtolower($fila["genero"]))?></td>
            <td><?=$fila["id_peli"]?></td>
            <td><form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
            	<input type="submit" value="Editar" name="<?=$fila['id_peli']?>"></td>
            <td><input type="submit" value="Borrar"></form></td>
        </tr>
        <?php
    }
?>


</table>

<?php

/*
<?=editar_peli($fila["id_peli"])?>
<?=borrar_peli($fila["id_peli"])?>
*/
cerrar_conex($conex);

}
include "includes/pie.php";