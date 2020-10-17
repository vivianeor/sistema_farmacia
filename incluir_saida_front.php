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

<!--Início Incluir-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />

<center> 
<form method="post" action="incluir_saida_back.php"><br>
<p>

Codigo saida:
<input type="text" name="codsaida" ><br>
<br>

Codigo loja:<select size="1" name="loja_codloja">

<?php
// Gera a lista de loja
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$conexao);
$res=mysql_query("select * from loja");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
$cod1=$registro[1];
echo "<option value=\"$cod\">$cod1</option>\n";
}
?>
</select><br><br>

Codigo transportadora:<select size="1" name="transportadora_codtransportadora">

<?php
// Gera a lista de transportadora
$conexao=mysql_connect("localhost","root","vertrigo");
mysql_select_db("sistema_farmacia_matutino",$conexao);
$res=mysql_query("select * from transportadora");
while ($registro=mysql_fetch_row($res))
{
$cod=$registro[0];
$cod1=$registro[1];
echo "<option value=\"$cod\">$cod1</option>\n";
}
?>
</select><br><br>


Total:
<input type="text" name="total"><br>
<br>
Frete:
<input type="text" name="frete"><br>
<br>
Imposto:
<input type="text" name="imposto"><br>
<br>


<input type="submit" name="Submit" value="Incluir" class="botao">
</form>
</center>
<!--Fim Incluir-->