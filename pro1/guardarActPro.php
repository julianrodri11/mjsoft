
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
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td >Codigo</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php print $con['idAct']; ?>" id="idAct" disabled="disabled"/></td>
    </tr>
    
      <tr>
    <td >Nombre</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2"  value="<?php print $con['nomAct']; ?>" id="nomAct" disabled="disabled"/></td>
    </tr>
    
      <tr>
    <td >Estado Actecto</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php  print $con['fecIniAct']; ?>" id="fecIniAct" disabled="disabled" /></td>
    </tr>
      <tr>
    <td >Propietario Pagina</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php  print $con['fecFinAct']; ?>" id="fecFinAct" disabled="disabled"/>
		</td>
    </tr>
    
          <tr>
    <td >Propietario Pagina</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php  print $con['HHAct']; ?>" id="HHAct" disabled="disabled"/>
		</td>
    </tr>
    
          <tr>
    <td >Propietario Pagina</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php  print $con['estAct']; ?>" id="estAct" />
		</td>
    </tr>
    
          <tr>
    <td >Propietario Pagina</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php  print $con['idPro']; ?>" id="idPro" disabled="disabled"/>
		</td>
    </tr>
    <tr>
    	<td> <input type="file" name="imagen" id="imagen" />
    	</td>
    </tr>
          <tr>
    <td >Propietario Pagina</td>
  </tr>
    <tr>
      <td><input type="text" class="caja2" value="<?php  print $con['idProy']; ?>" id="idProy" disabled="disabled"/>
		</td>
    </tr>
    
   <tr>
    <td ><input type="submit" name="button" id="button" value="Editar" onClick="GuardarEdicionActPro(<?php print $con['idAct']; ?>);"/></td>
  </tr>
</table>
