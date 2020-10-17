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
$result = mysql_query("select * from entrada", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo Entrada</h1></td>
	<td><h1>Transportadora</h1></td>
	<td><h1>Data Pedido</h1></td>
	<td><h1>Data Entrada</h1></td>
	<td><h1>Total</h1></td>
	<td><h1>Frete</h1></td>
	<td><h1>Número NF</h1></td>
	<td><h1>Imposto</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["codentrada"]."</td>
          <td>".$row["transportadora_codtransportadora"]."</td>
		  <td>".$row["dataped"]."</td>
		  <td>".$row["dataentr"]."</td>
		  <td>".$row["total"]."</td>
		  <td>".$row["frete"]."</td>
		  <td>".$row["numnf"]."</td>
		  <td>".$row["imposto"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->