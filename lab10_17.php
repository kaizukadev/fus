<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>PHP5+MySQL --> GROUP BY (SNF)</title>
</head>
<?php
include 'estilo1.inc';
include 'db_connect_l.php';
$sql = 'select id_categoria, avg(preco) as media_preco';
$sql = $sql . ' from miniaturas group by id_categoria';
//$sql = $sql . ' order by id_categoria';
$sql = $sql . ' having avg(preco) > "150.00"';
$sql = $sql . ' order by media_preco desc';

$rs = mysql_query($sql,$conexao);
$total_registros = mysql_num_rows($rs);
?>

<body>
<p>Sentença SQL: <strong><?php echo $sql; ?></strong><br>
Total de registros retornados pela consulta: <strong><?php echo $total_registros; ?></strong></p>

<table cellspacing="0">
	<thead>
		<tr>
			<td>Categoria</td>
			<td align="right">Média de Preços</td>
		</tr>
	</thead>


<?php
	while ($reg = mysql_fetch_array($rs)) {
		$id_categoria = $reg['id_categoria'];
		$media_preco = $reg['media_preco'];
		?>
		<tr>
			<td><?php echo $id_categoria; ?></td>
			<td align="right">R$ <?php echo number_format($media_preco,2,',','.'); ?></td>
		</tr>
	<?php
	}?>

</table>
</body>
</html>

<?php include 'db_disconnect.php';
?>