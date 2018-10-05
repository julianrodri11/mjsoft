
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['q'];
$con = mysql_fetch_assoc(mysql_query("SELECT * FROM proyecto WHERE idProy='$q'"));

?>
<style type="text/css">
.caja2{width:150px;}
</style>
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td ><label for="textfield">Codigo</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php print $con['idProy']; ?>" id="idProy" disabled="disabled"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Nombre</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3"  value="<?php print $con['nomProy']; ?>" id="nomProy" /></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Estado Proyecto</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['estProy']; ?>" id="estProy" /></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Propietario Pagina</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['idUsu']; ?>" id="idUsu" disabled="disabled" />
		</td>
    </tr>
   <tr>
    <td align="center"><input type="submit" name="button" class="botones" value="Editar" onclick="GuardarEdicion(<?php print $con['idProy']; ?>);"/></td>
  </tr>
</table>
