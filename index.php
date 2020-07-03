<?php

	$paginas = ['home'=>'Minha página home aqui!',
				'sobre'=>'Estou na pagina sobre',
				'contato'=>''];
	$paginas['contato'] = '<form><input type="text" placeholder="Seu nome..."/></form>'

?>

<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Dinamico</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		header{
			background-color: #069;
			padding: 8px 10px;
			text-align: center; 
		}
		a{
			display:inline-block;
			margin:0 10px;
			color: white;
			font-size: 17px;

		}
	</style>
</head>
<body>
	<header>
		<?php
			foreach ($paginas as $key => $value) {
				echo '<a href="?page='.$key.'">'.$key.'</a>';
			}
			
		?>
	</header>

</body>


</html>
