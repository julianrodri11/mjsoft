<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['q'];
if($q=="undefined")//si el proyecto aun no tiene actividades	
{
echo "<h3>Al Proyecto Actual aun no se le asignan actividades<h3>";
echo"<meta content='3' http-equiv='REFRESH'> </meta>";
}else
{	
$conJR = mysql_fetch_assoc(mysql_query("SELECT * FROM cronograma WHERE idAct=$q"));	
?>

<style type="text/css">
.caja2{width:150px;}
#sugAct
{
	width:120px;
	height:100px;
	}
</style>
<html>
<title></title>
<head></head>
<body></body>
<center>
<!--form action="actualizarActPro.php" method="get" enctype="multipart/form-data" name="form1" id="form1"-->
<form action="" method="get" name="sugerencia">
<H3>ENVIANOS TUS QUEJAS RECLAMOS SUGERENCIAS<H3>
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
      <tr>
      <td><input type="hidden" class="caja2" value="<?php print $conJR['idAct']; ?>" id="idAct" name="idAct" /></td>
    </tr>    
      <tr>
    <td >ACTIVIDAD</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2"  value="<?php print $conJR['nomAct']; ?>" id="nomAct" name="nomAct"  disabled="disabled"/></td>
    </tr>
   <tr>
    <td >SUGERENCIA</td>
  </tr>
  <tr>
    <td ><input type="text" class="caja2"  id="sugAct"  placeholder="ESCRIBE EN ESTA AREA LAS RECOMENDACIONES HASTA 500 CARACTERES"/></td>
  </tr>
   
   <tr>   
    <td ><input type="button" name="button" id="button" value="Enviar" onClick="sugerencias();"/></td>
  </tr>
</table>
</form>
</html>
<?php
}
?>