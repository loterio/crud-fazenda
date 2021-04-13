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
		<link rel="stylesheet" href="assets/css/listar.css">
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
			
			<div class="filtros">
				<h1>Listar Consultas</h1>
				<form class="" action="" method="get"> 
					Deseja listar
					<select name="s" id="s">
						<option value="null">selecionar</option>
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
			</div>
			
			<div class="tabela">
				<table>			
				<?php
					// echo "<br><br>todos registros de $table<br>"; 
					$pdo = basicConnection();
					$line = 0;

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
							<tr class=".linedRow($line).">
								<td>{$linha['codigo']}</td>
								<td>{$linha['nome']}</td>
								<td>{$linha['idade']}</td>
								<td>{$linha['peso']}</td>
							</tr>
							";
							$line++;
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
							<tr class=".linedRow($line).">
								<td>{$linha['codigo']}</td>
								<td>{$linha['nome']}</td>
								<td>{$linha['crmv']}</td>
								<td>{$linha['telefone']}</td>
							</tr>
							";
							$line++;
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
							<tr class=".linedRow($line).">
								<td>{$linha['codigo']}</td>
								<td>{$linha['nome']}</td>
							</tr>
							";
							$line++;
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
							<tr class=".linedRow($line).">
								<td>{$linha['codigo']}</td>
								<td>{$linha['nome']}</td>
								<td>{$linha['nomePropriedade']}</td>
							</tr>
							";
							$line++;
						}
						echo "</tbody>";
					}
				?>
				</table>
			</div>
		</div>

	</body>
</html>
