<?php
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();//el objeto inboca a la clase
?>
<style type="text/css">

.resultados {

	width:400px;
	height:100px;
	overflow:auto;	
	border:1px dashed #F00;
		margin:auto;
}
.input .caja {
	width: 400px;
	text-align:center;
	margin:auto;
}

.caja {
	width: 400px;
}
</style>

<script src="ajax.js" language="javascript"></script>


<body>
<center>
<h1>MJSoft TUS MEJORES DISEÑOS</h1>
<div class="input" >

<input type="text" size="40" class="caja" id="valor" onKeyUp="Buscar();"/> </div>
<center>
<div class="resultados" id="resultados" align="center">
<center>
<!-- aqui se muestran todos los datos-->
</div>
<div>
<form action="" method="get" name="ingresar">
<table width="100" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td><label for="textfield">Codigo</label>
      <input type="text" name="textfield" id="codigo"></td>
  </tr>
  <tr>    
    <td><label for="textfield">Nombre</label>
      <input type="text" name="textfield" id="nombre"></td>
  </tr>
  <tr>    
    <td><label for="textfield">Costo</label>
      <input type="text" name="textfield" id="costo"></td>
  </tr>
  <tr>    
    <td><label for="textfield">Imagen</label>
      <input type="text" name="textfield" id="imagen"></td>
  </tr>
  <tr>    
    <td>
      <input type="button" onClick="InsertarDatos();" name="guardar" id="textfield" value="guardar"></td>
  </tr>
</table>
</form>
</div>

<br/>


