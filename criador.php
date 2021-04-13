<!DOCTYPE html>
<?php
	include "components.php";
    $title = "CRUD";
    
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $nomePropriedade = isset($_POST['nomePropriedade']) ? $_POST['nomePropriedade'] : '';
?>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
			<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="assets/css/style.css">
	</head>
	<body>
		<nav>
			<h4 class='logo'>CRUD da Fazenda</h4>
			<ul class='menu'>
				<li><a href='index.php'>Gado</a></li>
				<li><a href='vet.php'>Veterinário</a></li>
				<li><a href='raca.php'>Raça</a></li>
				<li><a href='criador.php'>Criador</a></li>
				<li><a href='listar.php'>Listar</a></li>
			</ul>
		</nav>
		<div class="data">
			<h1>Cadastro de Criador</h1>
			<form class="" action="a-listar.php?k=criador" method="post"> 
				<input placeholder='nome' value='<?php $nome; ?>' name="nome" type="text" class="validate">
				<input placeholder='nome propriedade' value='<?php $nomePropriedade; ?>' name="nomePropriedade" type="text" class="validate">
				<input type="submit" value="salvar">
			</form>

			<?php

			?>
		</div>
	</body>
</html>
