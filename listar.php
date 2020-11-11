<!DOCTYPE html>
<?php
	include "components.php";
	include "conf/Conexao.php";
	basicConnection();
	
	$nomes_tabelas = array('gado','veterinario','raca','criador');

	$tipo=isset($_GET['s']) ? $_GET['s'] : ''; // A variável da busca dessa página mesmo (o select)
	$table = isset($_GET['k']) ? $_GET['k'] : whatIs($tipo); // variável vinda após a efetuação da inserção em alguma tabela
 
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
			<form class="" action="" method="get"> 
                Deseja listar
                <select name="s" id="s">
					<option value="">selecionar</option>
					<?php
						for ($x=0; $x < count($nomes_tabelas); $x++) {
							$y = $x + 1;
							$status = verifySelection($tipo,$y);
							echo "<option value='$y' $status>$nomes_tabelas[$x]</option>";
						}
					?>
                </select>
				<input type="submit" value="buscar">
			</form>

			<table>
						
			<?php
				echo "<br><br>todos registros de $table<br>"; 

				$pdo = basicConnection();

				if($table == "gado"){
					$consulta = $pdo->query("SELECT codigo,nome,idade,peso FROM $table;");
					echo "
						<thead>
							<tr>
								<th>#</th>
								<th>nome</th>
								<th>idade</th>
								<th>peso</th>
							</tr>
						</thead>
						<tbody>
					";
					while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						echo "
						<tr>
							<th>{$linha['codigo']}</th>
							<th>{$linha['nome']}</th>
							<th>{$linha['idade']}</th>
							<th>{$linha['peso']}</th>
						</tr>
						";
					}
					echo "</tbody>";
				}else if($table == "veterinario"){
					$consulta = $pdo->query("SELECT codigo,nome,crmv,telefone FROM $table;");
					echo "
						<thead>
							<tr>
								<th>#</th>
								<th>nome</th>
								<th>crmv</th>
								<th>telefone</th>
							</tr>
						</thead>
						<tbody>
					";
					while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						echo "
						<tr>
							<th>{$linha['codigo']}</th>
							<th>{$linha['nome']}</th>
							<th>{$linha['crmv']}</th>
							<th>{$linha['telefone']}</th>
						</tr>
						";
					}
					echo "</tbody>";
				}else if($table == "raca"){
					$consulta = $pdo->query("SELECT codigo,nome FROM $table;");
					echo "
						<thead>
							<tr>
								<th>#</th>
								<th>nome</th>
							</tr>
						</thead>
						<tbody>
					";
					while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						echo "
						<tr>
							<th>{$linha['codigo']}</th>
							<th>{$linha['nome']}</th>
						</tr>
						";
					}
					echo "</tbody>";
				}else if($table == "criador"){
					$consulta = $pdo->query("SELECT codigo,nome,nomePropriedade FROM $table;");
					echo "
						<thead>
							<tr>
								<th>#</th>
								<th>nome</th>
								<th>nome da propriedade</th>
							</tr>
						</thead>
						<tbody>
					";
					while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
						echo "
						<tr>
							<th>{$linha['codigo']}</th>
							<th>{$linha['nome']}</th>
							<th>{$linha['nomePropriedade']}</th>
						</tr>
						";
					}
					echo "</tbody>";
				}
			?>
			</table>
	</body>
</html>
