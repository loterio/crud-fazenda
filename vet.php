<!DOCTYPE html>
<?php
	include "components.php";
	include "conf/Conexao.php";
	$pdo = basicConnection();

    $title = "CRUD";
    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $crmv = isset($_POST['crmv']) ? $_POST['crmv'] : '';
    $tel = isset($_POST['tel']) ? $_POST['tel'] : '';
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
			<h4>CRUD - Veterinário</h4>
			<?php menu(); ?>
			</div>
		</nav>
			<h1>Cadastro de Veterinário</h1>
			<form class="" action="a-listar.php?k=veterinario" method="post"> 
				<input placeholder='nome' value="<?php echo $nome; ?>" name="nome" type="text" class="validate">
				<input placeholder='CRMV' value="<?php echo $crmv; ?>" name="crmv" type="text" class="validate">
				<input placeholder='telefone' value="<?php echo $tel; ?>" name="tel" type="text" class="validate">
				<input type="submit" value="salvar">
			</form>

			<?php

			?>
	</body>
</html>
