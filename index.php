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
				echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
			}
			
		?>
	</header>
	<section>
		<h2>
			<?php
				$pagina = (isset($_GET['page']) ? $_GET['page'] : 'home'); 

				if(!array_key_exists($pagina, $paginas)){
					$pagina = 'home';
				}

				echo $pagina;
			?>
		</h2>
	</section>
</body>


</html>
