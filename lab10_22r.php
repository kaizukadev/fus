<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
		date_default_timezone_set('America/Sao_Paulo');
		include 'db_connect_l.php';
	?>
	<title>PHP5+MySQL LAB10_22R</title>
</head>

<body>
<?php
	$campo = $_POST["campo"];
	$operador = $_POST["operador"];
	$valor = $_POST["valor"];
	$ordenar = $_POST["ordenar"];
	$forma_ordem = $_POST["forma_ordem"];

	include "estilo2.inc";

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
Sentença SQL: <strong><?php echo $sql; ?></strong><br>
Ordem de Exibição: <strong><?php echo $ordenar . " - " . $forma_ordem; ?></strong><br><br>
</p>

<table width="620" border="0" cellspacing="15" cellpadding="0">
<?php
	while ($reg = mysql_fetch_array($rs)) {
		$codigo = $reg['codigo'];
		$nome = $reg['nome'];
		$preco = $reg['preco'];
		$desconto = $reg['desconto'];
		$credito = $reg['credito'];
		$valor_desconto = $preco * (1-$desconto/100);
		?>
		<tr>
			<td valign="top"><img src="/FUS/imagens/<?php echo $codigo ;?>.jpg" width="140" height="85"></td>
			<td valign="top">
				<span class="titulo_miniatura"><?php echo $nome ;?></span><br>
				<span class="preco_normal">de: R$ <?php echo number_format($preco,2,",",".") ;?></span><br>
				Por: R$ <span class="destaque_preco"><?php echo number_format($valor_desconto,2,",",".") ;?></span> à vista<br>
				<span class="credito_imagem">Crédito da Imagem: <?php echo $credito ;?></span><br></td>
		</tr>
	<?php
	}?>

</table>
</body>
</html>

<?php include 'db_disconnect.php';
?>