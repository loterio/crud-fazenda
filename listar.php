<!DOCTYPE html>
<?php
	include "components.php";
	$title = "CRUD";
?>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
			<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<nav>
			<div>
			<h4>CRUD - Consultas</h4>
			<?php menu(); ?>
			</div>
		</nav>
			<h1>Listar Consultas</h1>
			<form class="" action="" method="post"> 
                Selecione um gado:<br>
                <select name="" id="">
                    <option value="">a</option>
                    <option value="">b</option>
                </select>
				<input type="submit" value="buscar">
			</form>

			<?php

			?>
	</body>
</html>
