<html>
<head>
<title>Série Faça um Site - PHP5 + MySQL (SNF)
</title>
</head>
<body>

<?php
$saida = " ";
$saida = $saida . "<table width='750' border='1' cellspacing='0' cellpadding='3' bordercolor = '000000'";
for ($G=0; $G<=255; $G=$G+51) {
	for ($B=0; $B<=255; $B=$B+51) {
		$saida=$saida."<tr>";
		for($R=0;$R<=255;$R=$R+51) {
			$saida=$saida."<td style='background-color:rgb($R,$G,$B)' align='center'><fontface='arial' size='4'>$R,$G,$B</font></td>";
		}
		$saida=$saida."</tr>";
	}
}
$saida=$saida."</table>";
?>
<h2>Tabela de cores seguras para WEB</h2>
<?php print $saida;
?>
</body>
</html>