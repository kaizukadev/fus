<html>
<head>
<title>Série Faça um Site - PHP5 + MySQL (SNF)
</title>
<!-- CSS para definir layout da tabela
Como chamar CSS <link rel="stylesheet" href="style.css">
 -->

<style type="text/css">

.box {
  width: 200px; height: 300px;
  position: relative;
  border: 1px solid #BBB;
  background: #EEE;
}
.ribbon {
  position: absolute;
  right: -5px; top: -5px;
  z-index: 1;
  overflow: hidden;
  width: 75px; height: 75px;
  text-align: right;
}
.ribbon span {
  font-size: 10px;
  font-weight: bold;
  color: #FFF;
  text-transform: uppercase;
  text-align: center;
  line-height: 20px;
  transform: rotate(45deg);
  -webkit-transform: rotate(45deg);
  width: 100px;
  display: block;
  background: #79A70A;
  background: linear-gradient(#9BC90D 0%, #79A70A 100%);
  box-shadow: 0 3px 10px -5px rgba(0, 0, 0, 1);
  position: absolute;
  top: 19px; right: -21px;
}
.ribbon span::before {
  content: "";
  position: absolute; left: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid #79A70A;
  border-right: 3px solid transparent;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #79A70A;
}
.ribbon span::after {
  content: "";
  position: absolute; right: 0px; top: 100%;
  z-index: -1;
  border-left: 3px solid transparent;
  border-right: 3px solid #79A70A;
  border-bottom: 3px solid transparent;
  border-top: 3px solid #79A70A;
}

</style>


</head>
<body>

<div class="box">
	Teste de digitação no box
   <div class="ribbon"><span>OK</span></div>
</div>




<font face='Lucida Console' color='Blue' size='6'>
<h5>LISTA DE PRODUTOS DISPONIVEIS [Tabela]</h5><font color='Black' size='4'>
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