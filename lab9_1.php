<html>
<head>
<title>Série Faça um Site - PHP5 + MySQL (SNF)
</title>
</head>
<body>
<font face='Calibri' color='Blue' size='6'>
<h4>Primeiro registro da tabela miniaturas</h4><font color='Black' size='4'>
<?php
//$conexao=mysql_connect("localhost","root","admin");
$conexao=mysql_connect("localhost","root","");
$db=mysql_select_db("db_php5",$conexao);
$sql="select * from miniaturas";
$rs=mysql_query($sql,$conexao);
$reg=mysql_fetch_array($rs);

$codigo=$reg['codigo'];
$nome=$reg['nome'];
$cat=$reg['id_categoria'];

print "Codigo da Miniatura: $codigo <br>";
print "Descricao: $nome <br>";
print "Categoria: $cat <br>";


mysql_free_result($rs);
mysql_close($conexao);
?>
</font>
</body>
</html>