<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
		date_default_timezone_set('America/Sao_Paulo');
		include 'estilo1.inc';
		include 'db_connect_l.php';
	?>
	<title>PHP5+MySQL LAB10_20R</title>
</head>

<body>
<?php
	$campo = $_POST["campo"];
	$operador = $_POST["operador"];
	$valor = $_POST["valor"];
	$ordenar = $_POST["ordenar"];
	$forma_ordem = $_POST["forma_ordem"];

	//$sql = "SELECT * FROM miniaturas ";
	$sql = 'SELECT categorias.cat_nome, miniaturas.*';
	$sql = $sql . ' FROM categorias INNER JOIN miniaturas';
	$sql = $sql . ' ON categorias.id = miniaturas.id_categoria ';
	if ($operador <> "CONTEM") {
		$sql = $sql . "WHERE " . $campo . $operador . "'" . $valor . "'";
	} else {
		$sql = $sql . "WHERE " . $campo . " LIKE " . "'%" . $valor . "%'";
	}
	
	$sql = $sql . " ORDER BY " . $ordenar . " " . $forma_ordem;

	$rs = mysql_query($sql,$conexao);
	$total_registros = mysql_num_rows($rs);
?>

<p>Pesquisa Solicitada: <strong><?php echo $campo . $operador . "'" . $valor . "'"; ?></strong><br>
Total de registros retornados pela consulta: <strong><?php echo $total_registros; ?></strong><br>
Sentença SQL: <strong><?php echo $sql; ?></strong><br><br>
</p>

<table cellspacing="0">
	<thead>
		<tr>
			<td align="right">ID</td>
			<td align="center">Código</td>
			<td>Descrição</td>
			<td>Categoria</td>
			<td align="center">Ano</td>
			<td>Cor</td>
			<td align="center">Escala</td>
			<td align="right">Preço</td>
			<td align="right">Estoque</td>
			<td align="right">Est Mín</td>
			<td align="center">Dt Cad</td>
		</tr>
	</thead>


<?php
	while ($reg = mysql_fetch_array($rs)) {
		$id = $reg['id'];
		$codigo = $reg['codigo'];
		$nome = $reg['nome'];
		$categoria = $reg['cat_nome'];
		$ano = $reg['ano'];
		$cor = $reg['cor'];
		$preco = $reg['preco'];
		$estoque_atu = $reg['estoque'];
		$estoque_min = $reg['min_estoque'];
		$data_cad = $reg['data_cad'];
		$escala = $reg['escala'];
		?>

		<tr>
			<td align="right"><?php echo $id; ?></td>
			<td align="center"><?php echo $codigo; ?></td>
			<td><?php echo $nome; ?></td>
			<td><?php echo $categoria; ?></td>
			<td align="center"><?php echo $ano; ?></td>
			<td><?php echo $cor; ?></td>
			<td align="center"><?php echo $escala; ?></td>
			<td align="right">R$ <?php echo number_format($preco,2,',','.'); ?></td>
			<td align="right"><?php echo $estoque_atu; ?></td>
			<td align="right"><?php echo $estoque_min; ?></td>
			<td align="center"><?php echo date('d/m/Y',strtotime($data_cad)); ?></td>
		</tr>
	<?php
	}?>

</table>
</body>
</html>

<?php include 'db_disconnect.php';
?>