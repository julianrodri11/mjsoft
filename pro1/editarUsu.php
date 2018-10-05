
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['q'];
$con = mysql_fetch_assoc(mysql_query("SELECT * FROM usuario WHERE idUsu='$q'"));

?>
<html>
<head>
<link type="text/css" href="hojas/estiloAdmin.css" rel="stylesheet" />
<script type="text/javascript" src="js/validaciones.js">
</script>
</head>
<body>
<form action="" method="get" id="frmUsu">
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><label for="textfield">Identificacion</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php print $con['idUsu']; ?>" id="idUsu" name="idUsu" disabled="disabled"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Nombre</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3"  value="<?php print $con['nomUsu']; ?>" name="nomUsu" id="nomUsu" maxlength="30" /></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Apellido</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['apeUsu']; ?>" name="apeUsu" id="apeUsu" maxlength="30"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Tipo Usuario</label></td>
  </tr>
    <tr>
      <td><!--input type="text" class="caja2" value="<?php  print $con['tipUsu']; ?>" id="tipUsu" /-->
      
      <select name="tipUsu" id="tipUsu"  class="caja3">
		<option value=<?php  print $con['tipUsu']; ?>>"<?php  print $con['tipUsu']; ?>"</option>
		<optgroup label="Tipo CLiente">
		<option value="Cliente">Cliente</option>
		<option value="Programador">Programador</option>
  		<option value="Administrador">Administrador</option>
		</select>
		</td>
    </tr>      
          <tr>
    <td ><label for="textfield">Genero</label></td>
  </tr>
      </tr>
    <tr>
      <td ><!--input type="text" class="caja3" value="< ?php  print $con['genUsu']; ?>" id="genUsu" /-->
      <select name="genUsu" id="genUsu"  class="caja3">
		<option value="<?php  print $con['genUsu']; ?>">"<?php  print $con['genUsu']; ?>"</option>
		<optgroup label="Genero">
		<option value="Masculino">Masculino</option>
		<option value="Femenino">Femenino</option>

		</select>
		</td>
    </tr>
	   <tr>
    <td ><label for="textfield">Telefono</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['celUsu']; ?>"  name="celUsu" id="celUsu" maxlength="10"/>
		</td>
    </tr>
    <tr>
    <td ><label for="textfield">Direccion</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['dirUsu']; ?>" name="dirUsu"  id="dirUsu" maxlength="30"/>
		</td>
    </tr>
        <tr>
    <td ><label for="textfield">Correo</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['corUsu']; ?>" id="corUsu" name="corUsu" maxlength="30"/>
		</td>
    </tr>
          <tr>
    <td ><label for="textfield">Contraseña</label></td>
  </tr>  
      </tr>
    <tr>
      <td><input type="password" class="caja3" value="<?php  print $con['conUsu']; ?>" id="conUsu"  name="conUsu" maxlength="30"/>
		</td>
    </tr>
   <tr>
    <td align="center"><input type="button" name="button" class="botones" id="button" value="Actualizar" onClick="GuardarEdicionUsu(<?php print $con['idUsu']; ?>);"/></td>
  </tr>
</table>
</form>
</body>
</html>