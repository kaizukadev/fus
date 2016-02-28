<?php
include 'db_connect_l.php';
$codigo = $_POST['codigo'];
$destaque = $_POST['destaque'];
$nome = $_POST['nome'];
$ano = $_POST['ano'];
$id_categoria = $_POST['id_categoria'];
$subcateg = $_POST['subcateg'];
$escala = $_POST['escala'];
$peso = $_POST['peso'];
$comprimento = $_POST['comprimento'];
$largura = $_POST['largura'];
$altura = $_POST['altura'];
$cor = $_POST['cor'];
$preco = $_POST['preco'];
$desconto = $_POST['desconto'];
$desconto_boleto = $_POST['desconto_boleto'];
$max_parcelas = $_POST['max_parcelas'];
$estoque = $_POST['estoque'];
$min_estoque = $_POST['min_estoque'];
$credito = $_POST['credito'];
$data_cad = date('Y-m-d');

$sql = "INSERT INTO miniaturas_teste ";
$sql = $sql . "(codigo,destaque,nome,ano,id_categoria,subcateg,escala,peso,comprimento,";
$sql = $sql . "largura,altura,cor,preco,desconto,desconto_boleto,max_parcelas,estoque,";
$sql = $sql . "min_estoque,credito,data_cad) ";
$sql = $sql . "VALUES ";
$sql = $sql . "('$codigo','$destaque','$nome','$ano','$id_categoria','$subcateg','$escala','$peso','$comprimento',";
$sql = $sql . "'$largura','$altura','$cor','$preco','$desconto','$desconto_boleto','$max_parcelas','$estoque',";
$sql = $sql . "'$min_estoque','$credito','$data_cad') ";

mysql_query($sql,$conexao); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LAB 11_1 INC</title>
  <link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
/*include 'db_connect_l.php';*/
?>

<body>
  <div id="caixa_cad">
    <h1><strong>Inclusão do registro efetuada com SUCESSO!</strong></h1>
    Código:&nbsp;<span class="data8"><?php echo $codigo . "<br>"; ?></span>
    Descrição:&nbsp;<span class="data8"><?php echo $nome . "<br>"; ?></span>
    Ano de Fabricação:&nbsp;<span class="data8"><?php echo $ano . "<br>"; ?></span>
    Categoria:&nbsp;<span class="data8"><?php echo $id_categoria . "<br>"; ?></span>
    Sub-Categoria:&nbsp;<span class="data8"><?php echo $subcateg . "<br>"; ?></span>
    Destaque Home-Page:&nbsp;<span class="data8"><?php echo $destaque . "<br>"; ?></span>
    Escala:&nbsp;<span class="data8"><?php echo $escala . "<br>"; ?></span>
    Peso:&nbsp;<span class="data8"><?php echo $peso . "<br>"; ?></span>
    Comprimento:&nbsp;<span class="data8"><?php echo $comprimento . "<br>"; ?></span>
    Largura:&nbsp;<span class="data8"><?php echo $largura . "<br>"; ?></span>
    Altura:&nbsp;<span class="data8"><?php echo $altura . "<br>"; ?></span>
    Cor:&nbsp;<span class="data8"><?php echo $cor . "<br>"; ?></span>
    Preço:&nbsp;<span class="data8"><?php echo $preco . "<br>"; ?></span>
    Desconto:&nbsp;<span class="data8"><?php echo $desconto . "<br>"; ?></span>
    Desconto Boleto:&nbsp;<span class="data8"><?php echo $desconto_boleto . "<br>"; ?></span>
    Parcelamento Máximo:&nbsp;<span class="data8"><?php echo $max_parcelas . "<br>"; ?></span>
    Em Estoque:&nbsp;<span class="data8"><?php echo $estoque . "<br>"; ?></span>
    Estoque Mínimo:&nbsp;<span class="data8"><?php echo $min_estoque . "<br>"; ?></span>
    Crédito da Imagem:&nbsp;<span class="data8"><?php echo $credito . "<br>"; ?></span>
    Data do Cadastro:&nbsp;<span class="data8"><?php echo $data_cad . "<br>"; ?></span>
    <p></p>
  </div>
  <div id="caixa_cad">
      <p>Teste linha 1</p>
      <p>Teste linha 2</p>



    </div>

</body>
</html>
