<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LAB 11_1</title>
  <link rel="stylesheet" type="text/css" href="estilo2.css">
</head>
<?php
setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
date_default_timezone_set('America/Sao_Paulo');
include 'db_connect_l.php';
?>

<body>
  <form name="form1" method="post" action="lab11_1inc.php">
    <div id="caixa_cad">
      <h1><strong>Inclusão de Miniaturas</strong></h1>
      <p><label>Código:</label><input name="codigo" type="text" class="caixa_texto" size="4" maxlength="5"></input>
      <p><label>Descrição:</label><input name="nome" type="text" class="caixa_texto" size="76" maxlength="60"></input>
      <p><label>Ano de Fabricação:</label><input name="ano" type="text" class="caixa_texto" size="2" maxlength="4"></input>
      <p><label>Categoria:</label><select name="id_categoria" class="caixa_combo">
      <?php 
        $itens_cat = "<option value='0'>-- Selecione uma Categoria</option><br>";
        $sql_cat = "SELECT * FROM categorias ORDER BY cat_nome ASC"      ;
        $rs_cat = mysql_query($sql_cat,$conexao);
        while ($reg_cat = mysql_fetch_array($rs_cat)) {
          $itens_cat = $itens_cat . "<option value='" . $reg_cat['id'] . "'>";
          $itens_cat = $itens_cat . $reg_cat['cat_nome'] ."</option><br>";
        }
        echo $itens_cat;
      ?>
      </select></p>
      <p><label>Sub-Categoria:</label><input name="subcateg" type="text" class="caixa_texto" size="36" maxlength="30"></input></p>
      <p><label>Destaque Home-Page:</label><input name="destaque" type="text" class="caixa_texto" size="1" maxlength="1"></input></p>
      <p><label>Escala:</label><input name="escala" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Peso:</label><input name="peso" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Comprimento:</label><input name="comprimento" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Largura:</label><input name="largura" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Altura:</label><input name="altura" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Cor Predominante:</label><input name="cor" type="text" class="caixa_texto" size="23" maxlength="20"></input></p>
      <p><label>Preço:</label><input name="preco" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Desconto:</label><input name="desconto" type="text" class="caixa_texto" size="1" maxlength="2"></input> (em percentual)</p>
      <p><label>Desconto Boleto:</label><input name="desconto_boleto" type="text" class="caixa_texto" size="1" maxlength="2"></input> (em percentual)</p>
      <p><label>Parcelamento Máximo:</label><input name="max_parcelas" type="text" class="caixa_texto" size="1" maxlength="2"></input></p>
      <p><label>Em Estoque:</label><input name="estoque" type="text" class="caixa_texto" size="10" maxlength="10"></input></p>
      <p><label>Estoque Mínimo:</label><input name="min_estoque" type="text" class="caixa_texto" size="10" maxlength="2"></input></p>
      <p><label>Crédito da Imagem:</label><input name="credito" type="text" class="caixa_texto" size="80" maxlength="200"></input></p><br>
      <p><input type="image" name="imagefield" src="../fus/imagens/btn_inserir.gif"></input></p>
    </div>
  </form>
</body>
</html>


