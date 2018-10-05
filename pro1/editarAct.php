
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['q'];
$con = mysql_fetch_assoc(mysql_query("SELECT * FROM cronograma WHERE idAct='$q'"));

?>
<style type="text/css">
.caja2{width:150px;}
</style>
<link type="text/css" href="hojas/estiloAdmin.css" rel="stylesheet" />
<html>
<head>
<title></title>

</head>
<body>

<label>
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><label for="textfield">Codigo</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php print $con['idAct']; ?>" id="idAct" disabled="disabled"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Actividad</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3"  value="<?php print $con['nomAct']; ?>" id="nomAct" /></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Fecha Inicio</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['fecIniAct']; ?>" id="fecIniAct" /></td>
    </tr>
      <tr>
    <td ><label for="textfield">Fecha Fin</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['fecFinAct']; ?>" id="fecFinAct" />
		</td>
    </tr>
    
          <tr>
    <td ><label for="textfield">Tiempo</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['HHAct']; ?>" id="HHAct" />
		</td>
    </tr>
    
          <tr>
    <td ><label for="textfield">Estado Actividad</label></td>
  </tr>
    <tr>
      <td><!--input type="text" class="caja3" value="< ?php  print $con['estAct']; ?>" id="estAct" /-->
       <select name="estAct" id="estAct"  class="caja3">
		<option value="<?php  print $con['estAct']; ?>">"<?php  print $con['estAct']; ?>"</option>
		<optgroup label="Estado">
		<option value="EnProceso">En Proceso</option>
   		<option value="Suspendida">Suspendida</option>
		<option value="Finalizada">Finalizada</option>
		</optgroup>
		</select>
		</td>
    </tr>
    
          <tr>
    <td ><label for="textfield">Id Programador</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['idPro']; ?>" id="idPro" />
		</td>
    </tr>
   
          <tr>
    <td ><label for="textfield">id Proyecto</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['idProy']; ?>" id="idProy" />
		</td>
    </tr>
    
   <tr>
    <td align="center"><input type="submit" cla class="botones" name="button" id="button" value="Editar" onClick="GuardarEdicionAct(<?php print $con['idAct']; ?>);"/></td>
  </tr>
</table>
</label>
</body>
</html>