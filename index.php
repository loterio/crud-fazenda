<!DOCTYPE html>
<?php
	include "components.php";
	include "conf/Conexao.php";
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
		<form method="post" action="a-listar.php?k=gado"> <!-- gado(cod,nome,idade,peso,raca_cod,criador_cod) -->
			<input placeholder="nome" name="nome" type="text" value="<?php echo $nome; ?>">
			<input placeholder="idade" name="idade" type="text" value="<?php echo $idade; ?>">
			<input placeholder="peso" name="peso" type="text" value="<?php echo $peso; ?>">

			<select name="raca" id="raca">
				<option value="">raça</option>
				<optgroup label="Raças"> 
				<?php
					$pdo = basicConnection();

					$consulta = $pdo->query("SELECT codigo, nome FROM raca;");

					while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						echo "<option value='{$linha['codigo']}'>{$linha['nome']}</option>";
					}
				?>
				</optgroup>
			</select>
			
			<select name="criador" id="criador">
				<option value="">criador</option>
				<optgroup label="Criadores"> 
				<?php
					$pdo = basicConnection();

					$consulta = $pdo->query("SELECT codigo, nome FROM criador;");

					while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						echo "<option value='{$linha['codigo']}'>{$linha['nome']}</option>";
					}
				?>
				</optgroup>
			</select>
			
			<input type="submit" value="salvar">
		</form>
		<?php
			// tabela("joao","18","689.3","angus","gionei");
		?>
	</body>
</html>
