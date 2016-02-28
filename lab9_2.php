<html>
<head>
<title>Série Faça um Site - PHP5 + MySQL (SNF)
</title>
</head>
<body>
<font face='Calibri' color='Blue' size='6'>
<h5>LISTA DE PRODUTOS DISPONIVEIS</h5><font color='Black' size='4'>
<?php
//$conexao=mysql_connect("localhost","root","admin");
$conexao=mysql_connect("localhost","root","");
$db=mysql_select_db("db_php5",$conexao);
$sql="select * from miniaturas order by nome";
$rs=mysql_query($sql,$conexao);
//$reg=mysql_fetch_array($rs);

print "Conexao: $conexao <br>";
print "Banco: $db <br>";
print "String SQL: $sql <br>";
print "RS: $rs <br><hr>";

while ($reg=mysql_fetch_array($rs)){
	$codigo=$reg['codigo'];
	$nome=$reg['nome'];
	$cat=$reg['id_categoria'];
	print "[$codigo] $nome [$cat] <br>";
	}

/*
print "Codigo da Miniatura: $codigo <br>";
print "Descricao: $nome <br>";
print "Categoria: $cat <br>";
*/

mysql_free_result($rs);
mysql_close($conexao);
?>
</font>
</body>
</html>