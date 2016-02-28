<html>
<head>
<title>Série Faça um Site - PHP5 + MySQL (SNF)
</title>
<!-- CSS para definir layout da tabela
Como chamar CSS <link rel="stylesheet" href="style.css">
 -->

<style type="text/css">
body {
	font-family: Arial, Helvetica, Sans-Serif;
}
table {
	border: 2px solid #000000;
	width: 100%;
}
td {
	font-size: 11px;
	border-width: 1px;
	border-color: #999999;
	border-right-style: solid;
	border-bottom-style: solid;
}
#titulo_tabela {
	background-color: #cccccc;
}
</style>


</head>
<body>
<!--<font face='Lucida Console' color='Blue' size='6'>-->
<font face='Calibri' color='Blue' size='6'>
<h5>LISTA DE PRODUTOS DISPONIVEIS [Tabela-Include NEW]</h5><font color='Black' size='2'>

<?php
include "db_connect_r.php";
$db=mysql_select_db("fus",$conexao);
$sql="select * from miniaturas order by nome";
$rs=mysql_query($sql,$conexao);

print "Conexao: $conexao <br>";
print "Banco: $db <br>";
print "String SQL: $sql <br>";
print "RS: $rs <br><hr>";
?>

<table cellspacing='0'>
<tr id="titulo_tabela">
<td>Codigo</td>
<td>Descricao</td>
<td>Categoria</td>
<td align='right'>Preco</td>
</tr>

<?php
while ($reg=mysql_fetch_array($rs)){
	$codigo=$reg['codigo'];
	$nome=$reg['nome'];
	$cat=$reg['id_categoria'];
	$preco=$reg['preco'];
?>	
	
<tr>
<td><?php print $codigo ;?></td>
<td><?php print $nome ;?></td>
<td><?php print $cat ;?></td>
<td align='right'> R$ <?php print number_format($preco,2,',','.') ;?></td>
</tr>
<?php
	}
?>

</table>

<?php
include "db_disconnect.php";
?>
</font>
</body>
</html>