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

<!-- Inicio Incluir -->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />

<center><form method="post" action="alterar_itemsaida_back.php">

<br> Codigo Item Saida: <select size="1" name="coditemsaida">
<?php
// gera lista de itemsaida// fazer a conexão
$db=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$res = mysql_query ("select * from itemsaida");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod";
}
?>
</select><br><br>

Codigo Saida: <select size="1" name="codsaida">
<?php
// gera lista de produto // fazer a conexão
$db=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$res = mysql_query ("select * from itemsaida");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod";
}
?>
</select><br><br>

Codigo Produto: <select size="1" name="codproduto">
<?php
// gera lista de produto // fazer a conexão
$db=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$db);
$res = mysql_query ("select * from itemsaida");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
$nome=$registro[1];
echo "<option value=\"$cod\">$cod";
}
?>
</select><br><br>

Lote:
<input type="text" name="lote"><br>
<br>
Quantidade:
<input type="text" name="qtde"><br>
<br>
Valor:
<input type="text" name="valor"><br>
<br>

<br><br>
<input type="submit" name="Submit" value="Alterar" class="botao">
</form>
</center>