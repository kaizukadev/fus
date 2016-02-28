<html>
<head>
<title>Série Faça um Site - PHP5 + MySQL - (Desenvolvido por SNF)
</title>
</head>
<body>

<?php
//date_default_timezone_set("America/Sao_Paulo");
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
?>

<strong>Esta página foi processada e enviada pelo servidor WEB em:
</strong>
<?php print date("d/m/y");
?>
<br><br>

<?php
// Prints the day
echo date("l") . "<br><br>";

// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
?> 
<br><br>
<?php
echo ucfirst(strftime('%A, %d de %B de %Y', strtotime('today')));

?>
<br><br>

<?php
    setlocale(LC_ALL, NULL);
    setlocale(LC_ALL, 'pt_BR');  
    print ucfirst(gmstrftime('%A'));
?>
<br><br>
<?php
echo $HTTP_USER_AGENT;
?>
</body>
</html>