<form action="<?=$_SERVER["PHP_SELF"];?>" method="POST" enctype="multipart/form-data">
<ul class="fotoperfil">

	<?php foto_perfil(); ?>
	
	<li>Foto de perfil</li>
	<input type="hidden" name="MAX_FILE_SIZE" value="2048000" />
	<li><input type="file" name="foto"><span class="errorform"></li>
	<li><span class="errorform"> <?php if(!empty($error)){ echo $error; } ?></span></li>
	<li><input type="submit" name="fotoperfil" value="Subir Foto"></li>
</ul>
</form>