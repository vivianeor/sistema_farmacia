<html>
<head>
<title>Menu Sistema Farmacia</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>

<body>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>

<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />

<?php
error_reporting(0);
$db = mysql_connect ("localhost", "root", "vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$result = mysql_query("select * from produto", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo Produto</h1></td>
	<td><h1>Codigo Catedoria</h1></td>
	<td><h1>Codigo Fornecedor</h1></td>
	<td><h1>Descrição</h1></td>
	<td><h1>Peso</h1></td>
	<td><h1>Controlado</h1></td>
	<td><h1>Quantidade</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["codproduto"]."</td>
          <td>".$row["categoria_codcategoria"]."</td>
		  <td>".$row["fornecedor_codfornecedor"]."</td>
		  <td>".$row["descricao"]."</td>
		  <td>".$row["peso"]."</td>
		  <td>".$row["controlado"]."</td>
		  <td>".$row["qtdemin"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->