<?php

	$paginas = ['home'=>'Minha página home aqui!',
				'sobre'=>'Estou na pagina sobre',
				'contato'=>'<input type="text" />'];


?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Tutorial Dinamico

	</title>
</head>
<body>
	<?php
		echo $paginas['contato'];
	?>
</body>


</html>
