
<?php
session_start();
if(isset($_SESSION['corUsu']) and $_SESSION['tipUsu']=="Programador")
    {
    //echo "puedes ver esta pagina";
   	   $idUsuario=$_SESSION['idUsu'];
//   echo($idProgramador);
    

include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();//el objeto inboca a la clase
?>
<style type="text/css">
.input .caja {	text-align:center;}
.caja {	margin-top:20px;	width: 200px;}
form label {
	width: 100%;
	float: left;
	display: inline-block;
	font-weight: bold;
	margin-bottom: 5px;
	font-size:12px;
}
form label.error {
	float: left;
	color: red;
	font-size:12px;
	font-weight: normal;
	padding-left: .5em;
	vertical-align: top;
}

HTML,BODY,INPUT,LABEL{cursor:url(img/puntero.png),auto;}
</style>
<script src="ajax.js" language="javascript"></script>
<html>
<head>
<title>JULIAN RODRIGUEZ</title>

<link type="text/css" href="hojas/estiloAdmin.css" rel="stylesheet" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<script src="js/efectos.js"> </script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>
</head>


<body onLoad="BuscarAct2(<?php echo($idUsuario); ?>);">
<h1 align=center>PROGRAMADOR</h1>


<div class="cont" id="cont">

<div id="actividades">
		
	<div id="titulo5"><img src="img/actividades.png" width="300px" height="90px"></div> 
	<div><!--contenedor menu Actividades-->
		<div id="conPro4">
		<img src="img/misActi.png" width="250px" height="80px">
		</div> 

	<div id="zzz7">
		<div>
    	<div id="resultadosAct" class="resultadosAct" ></div>
		</div> 
	</div><!--div zzz7--> 

	<div id="menIngProy4" align="center" onClick="leerSugPro(<?php echo($idUsuario); ?>);"><img src="img/leerSug.png" width="300px" height="80px"></div>
	
    <div align="center" id="zzz8"> 
	     <div id="sugerencias">AQUI VAN LAS SUGERECNIAS DE LAS ACTIVIDADES --> </div><!--cierra-->
	</div><!--cierra zzz8-->
</div>
<div id="tituloPro"><img src="img/datPer.png" width="300px" height="90px"></div> 
<div><!--contenedor menu Actividades-->
		<div id="conProPer">
<!-------------------------------------------------------->

<?php 

$q=$idUsuario;
$con = mysql_fetch_assoc(mysql_query("SELECT * FROM usuario WHERE idUsu='$q'"));

?>

<link type="text/css" href="hojas/estiloAdmin.css" rel="stylesheet" />
		<form action="" method="get" name="ingresar" id="formProgPerfil">
<table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
  
    <tr>
      <td><input type="hidden" class="caja3" value="<?php print $con['idUsu']; ?>" id="idUsu" name="idUsu" disabled="disabled"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Nombre</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3"  value="<?php print $con['nomUsu']; ?>" id="nomUsu" name="nomUsu"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Apellido</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['apeUsu']; ?>" id="apeUsu" name="apeUsu"/></td>
    </tr>
    
      <tr>
    <td ><label for="textfield">Tipo Usuario</label></td>
  </tr>
    <tr>
      <td><!--input type="text" class="caja2" value="<?php  print $con['tipUsu']; ?>" id="tipUsu" /-->
      
      <select disabled name="tipUsu" id="tipUsu"  class="caja3">
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
      <td ><!--input type="text" class="caja3" value="< ?php  print $con['genUsu']; ?>" id="genUsu" name="genUsu"/-->
       <select name="genUsu" id="genUsu" class="caja3" >
				<option value="<?php  print $con['genUsu']; ?>"><?php  print $con['genUsu']; ?></option>                				            
                <optgroup label="Genero">
				<option value="Masculino">Masculino</option>
				<option value="Femenino">Femenino</option>
                </optgroup>
			</select>
		</td>
    </tr>
	   <tr>
    <td ><label for="textfield">Telefono</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['celUsu']; ?>" id="celUsu" name="celUsu"/>
		</td>
    </tr>
    <tr>
    <td ><label for="textfield">Direccion</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['dirUsu']; ?>" id="dirUsu" name="dirUsu"/>
		</td>
    </tr>
        <tr>
    <td ><label for="textfield">Correo</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text" class="caja3" value="<?php  print $con['corUsu']; ?>" id="corUsu" name="corUsu"/>
		</td>
    </tr>
          <tr>
    <td ><label for="textfield">Contraseña</label></td>
  </tr>  
      </tr>
    <tr>
      <td><input type="password" class="caja3" value="<?php  print $con['conUsu']; ?>" id="conUsu"  name="conUsu"/>
		</td>
    </tr>
   <tr>
    <td align="center"><input type="button" name="button" class="botones" id="button" value="Actualizar" onClick="ActuDatPerPro(<?php print $con['idUsu']; ?>);"/></td>
  </tr>
</table>
<div id="conProPer" class="conProPer" ></div>

</form><!-------------------------------------------------------->
		</div> 
      </div>


</div>



<h1 align=center>MJSOFT</h1>
<div align="center"><?php
		echo "<label for='textfield'>Bienvenido:<h4>".$_SESSION['corUsu']."</h4><a href=destruir.php> Cerrar Sesion</a></label>";
//		 echo "";?>
        </div>

</div>

</body>
</html>

<?php }else{
        echo"No puedes ver esta pagina por favor inicial sesion";
		echo "<br><a href=loguin.html> Pagina Principal</a>";
    }
?>
