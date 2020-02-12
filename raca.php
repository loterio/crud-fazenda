<!DOCTYPE html>
<?php
	include "components.php";
    $title = "CRUD";
    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
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
			<h4>CRUD - Raça</h4>
			<?php menu(); ?>
			</div>
		</nav>
			<h1>Cadastro de Raça</h1>
			<form class="" action="" method="post"> 
				<input placeholder='nome' value='<?php echo $nome; ?>' name="nome" type="text" class="validate">
				<input type="submit" value="salvar">
			</form>

			<?php

			?>
	</body>
</html>
