
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos los libros</title>
</head>
<body>
	<?php foreach ($carrs as $carr): ?>
		<p>
			<?=$carr['Id_ClavePerfil']?>, 
            por <?=$carr['Desc_Perfil']?>
		</p>
	<?php endforeach ?>
</body>
</html>