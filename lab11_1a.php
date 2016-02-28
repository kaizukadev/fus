<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<title>LAB 11_1</title>

<style type="text/css">
<!--
.txtarea {
height: 100px;
}
-->
</style>

</head>
<?php
	setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");
	date_default_timezone_set('America/Sao_Paulo');
	include 'db_connect_l.php';
?>

<body>
  <div class="container" style='background-color: #2ba6cb;'>
    <h3>Inclusão de Miniaturas</h3>
    <form class="form-horizontal" role="form">
      <div class="form-group form-group-xs">
        <label class="col-xs-2 control-label" for="xs">Código:</label>
        <div class="col-xs-1">
          <input class="form-control" type="text" id="codigo" placeholder="" maxlength="5" required="required">
        </div>
      </div>  
      <div class="form-group form-group-xs">
        <label class="col-xs-2 control-label" for="sm">Descrição:</label>
        <div class="col-xs-6">
          <input class="form-control" type="text" id="nome" placeholder="" maxlength="60">
        </div>
      </div>  
      <div class="form-group form-group-xs">
        <label class="col-xs-2 control-label" for="sm">Ano Fabricação:</label>
        <div class="col-xs-2">
          <input class="form-control" type="number" min="1900" id="ano" placeholder="">
        </div>
      </div>  

      <div class="container">
  <h2>Column Sizing</h2>
  <p>The form below shows input elements with different widths using different .col-xs-* classes:</p>
  <form role="form">
    <div class="form-group">
      <div class="col-xs-2">
        <label for="ex1">col-xs-2</label>
        <input class="form-control" id="ex1" type="text">
      </div>
      <div class="col-xs-3">
        <label for="ex2">col-xs-3</label>
        <input class="form-control" id="ex2" type="text">
      </div>
      <div class="col-xs-4">
        <label for="ex3">col-xs-4</label>
        <input class="form-control" id="ex3" type="text">
      </div>
    </div>
  </form>
</div>








    </form>
  </div>






</body>
</html>
