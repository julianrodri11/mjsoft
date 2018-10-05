
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['q'];
$conJR = mysql_fetch_assoc(mysql_query("SELECT * FROM cronograma WHERE idAct=$q"));
?>

<style type="text/css">
.caja2{width:150px;}
</style>

<html>
<title></title>
<head>
<link type="text/css" href="hojas/estiloAdmin.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="js/efectos.js"> </script>
</head>
<body></body>
<center>



<form action="actualizarActPro.php" method="POST" enctype="multipart/form-data">
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td><input type="hidden" class="caja3" value="<?php print $conJR['idAct']; ?>" id="idAct" name="idAct"  /></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">ACTIVIDAD</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3"  value="<?php print $conJR['nomAct']; ?>" id="nomAct" name="nomAct" disabled="disabled" /></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">FECHA FIN</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $conJR['fecIniAct']; ?>" id="fecIniAct" name="fecIniAct" disabled="disabled" /></td>
    </tr>
      <tr>
    <td ><label for="textfield">FECHA INICIO</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $conJR['fecFinAct']; ?>" id="fecFinAct" name="fecFinAct"  disabled="disabled"/>
		</td>
    </tr>
    
          <tr>
    <td ><label for="textfield">HORAS A INVERTIR</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $conJR['HHAct']; ?>" id="HHAct"  name="HHAct" disabled="disabled" />
		</td>
    </tr>
    
          <tr>
    <td ><label for="textfield">ESTADO ACTIVIDAD</label></td>
  </tr>
    <tr>
      <td><!--input type="text" class="caja2" value="< ?php  print $con['estAct']; ?>" id="estAct" /-->
      <select name="estAct" id="estAct"  class="caja3">
				<option value="<?php  print $conJR['estAct']; ?>"><?php  print $conJR['estAct']; ?></option>                				            
				<option value="Proceso">En Proceso</option>
				<option value="Suspendido">Suspendido</option>
		  		<option value="Finalizado">Finalizado</option>
			</select>
      
		</td>
    </tr>  
          <tr>
    <td ><label for="textfield">PROGRAMADOR</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $conJR['idPro']; ?>" id="idPro" name="idPro" disabled="disabled" />
		</td>
    </tr>
        </tr>  
          <tr>
    <td ><label for="textfield">IMAGEN AVANCE</label></td>
  </tr>
   <tr><td>	<!--input type="file" name="imagen" id="imagen" class="imagen"/-->
   <div class="imjr"><input type="file" size="1" class="imagen" name="imagen"  id="imagen"/>
    Subir archivo
</div>
   </td>
</tr>
          <tr>
    <td ><label for="textfield">PROYECTO</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $conJR['idProy']; ?>" id="idProy" name="idProy" disabled="disabled" />
		</td>
    </tr>
    
   <tr>
    <!--td ><input type="submit" name="button" id="button" value="Editar" onClick="GuardarEdicionActPro(< ?php print $con['idAct']; ?>);"/></td-->
    <td align="center"><input type="submit" name="button" id="button" class="botones" value="Actualizar" /></td>
  </tr>
</table>
<div id="resultadosAvance" class="resultadosAvance" ></div>
	</div> 
</form>
</html>