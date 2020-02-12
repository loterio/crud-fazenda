<!DOCTYPE html>
<?php
	include "components.php";
	$title = "CRUD";

	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$idade = isset($_POST['idade']) ? $_POST['idade'] : '';
	$peso = isset($_POST['peso']) ? $_POST['peso'] : '';
	$raca = isset($_POST['raca']) ? $_POST['raca'] : '';
	$criador = isset($_POST['criador']) ? $_POST['criador'] : '';
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
			<h4>CRUD - Gado</h4>
			<?php menu(); ?>
			</div>
		</nav>
		<h1>Cadastro de Gado</h1>
		<form method="post"> <!-- gado(cod,nome,idade,pesoraca_cod,criador_cod) -->
			<input placeholder="nome" name="nome" type="text" value="<?php echo $nome; ?>">
			<input placeholder="idade" name="idade" type="text" value="<?php echo $idade; ?>">
			<input placeholder="peso" name="peso" type="text" value="<?php echo $peso; ?>">
			<input placeholder="raça" name="raca" type="text" value="<?php echo $raca; ?>">
			<input placeholder="criador" name="criador" type="text" value="<?php echo $criador; ?>">
			<input type="submit" value="salvar">
		</form>
		<?php
			tabela("joao","18","689.3","angus","gionei");
		?>
	</body>
</html>
