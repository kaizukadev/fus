<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LAB 10_23</title>
</head>
<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');
	include 'estilo2.inc';
?>

<body>
<form method="post" action="lab10_23r.php">
<h3>Pesquisa de Registros na tabela MINIATURAS</h3><br>
<p class="destaque"><strong>Etapa 1:</strong> Seleção de Registros:</p>

<label>Campo:
<select name="campo">
<option value="id">ID</option>
<option value="codigo" selected="selected">CÓDIGO</option>
<option value="nome">DESCRIÇÃO</option>
<option value="ano">ANO DE FABRICAÇÃO</option>
<option value="escala">ESCALA</option>
<option value="cor">COR</option>
<option value="estoque">ESTOQUE</option>
<option value="preco">PREÇO</option>
</select>
</label>

<label>Operador:
<select name="operador">
<option value="=" selected="selected">IGUAL</option>
<option value=">">MAIOR QUE</option>
<option value=">=">MAIOR OU IGUAL</option>
<option value="<">MENOR QUE</option>
<option value="<=">MENOR OU IGUAL</option>
<option value="<>">DIFERENTE</option>
<option value="CONTEM">CONTÊM</option>
</select>
</label>

<label>Valor:
<input type="text" name="valor" width="150"><br><br><br>
</label>

<p class="destaque"><strong>Etapa 2:</strong> Ordenação dos Registros:</p>

<label>Ordenar por:
<select name="ordenar">
<option value="id">ID</option>
<option value="codigo" selected="selected">CÓDIGO</option>
<option value="nome">DESCRIÇÃO</option>
<option value="ano">ANO DE FABRICAÇÃO</option>
<option value="escala">ESCALA</option>
<option value="cor">COR</option>
<option value="estoque">ESTOQUE</option>
<option value="preco">PREÇO</option>
</select>
</label>

<select name="forma_ordem">
<option value="ASC" selected="selected">CRESCENTE</option>
<option value="DESC">DECRESCENTE</option>
</select>

<input type="submit" class="botao" name="submit" value="Pesquisar">

</form>
</body>
</html>
