<h1>Lo sentimos, no has podido registrarte correctamente</h1>
<p style="text-align:center;">ERROR CON LA BASE DE DATOS <?= mysqli_error($conex); ?></p>
<br>
<a href="index.php">Volver a inicio</a>

<?php 

mysqli_error($conex);