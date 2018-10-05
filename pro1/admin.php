<?php
session_start();
if(isset($_SESSION['corUsu']) and $_SESSION['tipUsu']=="Administrador")
    {
    //echo "puedes ver esta pagina";
   
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();//el objeto inboca a la clase
?>
<style type="text/css">
.input .caja {	text-align:center;}
.caja {	
margin-top:20px;	
width: 200px;} 
HTML,BODY,INPUT,LABEL{cursor:url(img/puntero.png),auto; }

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
#instrucciones
{color:#06F;
font-family:Arial, Helvetica, sans-serif;
font-style:oblique;
font-size:9px;
	}

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
<script type="text/javascript" src="js/validaciones.js">
 
</script>
</head>
<body onLoad="reportes();">
<h1 align=center>SISTEMA DE ADMINISTRACION</h1>

<div class="cont" id="cont">

	<div  id="proyectos">

    <div id="tituloProyectos"><img src="img/proyectos.png" width="350px" height="90px"></div>	
    <div><!--contenedor menu proyectos-->
    	<div id="conPro"><img src="img/buscarProy.png" width="200px" height="50px"></div>  
	    <div id="zzz">
    		<div ><input  type="text"  class="caja3" id="valor" onKeyUp="Buscar();" placeholder="Buscar Proyecto o CC Cliente "/> 
			      <div id="resultados" class="resultados" ></div>
			</div>	                    
	    </div><!--div zzz-->  
        
       <div id="menIngProy" align="center"><img src="img/ingresar.png" width="200px" height="50px"></div>
            <div  align="center" id="zzz2">    
		<form action="" method="get" name="ingresar" id="formProy">
		<table width="100" border="0" cellspacing="0" cellpadding="0">
		   <tr>    
		    <td align="center"><label for="textfield">Nombre Proyecto</label>
            

	      <input type="text" name="nomProy" id="nomProy" class="caja3" required maxlength="40"></td>
		  </tr>
		  <tr>    
          <td align="center"><label for="textfield">Estado</label>
          </td></tr>
          <tr>
          <td align="center">

            <select name="estProy" id="estProy" class="caja3" >
  				<option value="PorAsignar">Por Asignar</option>  
				<option value="Proceso">En Proceso</option>
				<option value="Suspendido">Suspendido</option>
		  		<option value="Finalizado">Finalizado</option>
			</select>
	        </td>
	        </tr>
        	<tr>    
          <td align="center"><label for="textfield">Asignar Propietario Proyecto</label>
          </tr>
           <tr><td align="center">

            <?php
//				$sql="SELECT * FROM usuario";
				$sql="SELECT idUsu,nomUsu FROM usuario WHERE (CONVERT(  `tipUsu` USING utf8 ) LIKE  'Cliente')";
				$consulta=mysql_query($sql)	?>
			<select id="idUsu" class="caja3">    
			    <?php    
			    while ( $row = mysql_fetch_assoc($consulta) ){ ?>    
		        <option value=" <?php echo $row['idUsu'] ?> " ><?php echo $row['nomUsu']; ?></option>        
	    	    <?php } ?>        
			</select>      
    	    </td>
	        </tr>
        	<tr>    
          <td align="center">
            <input type="button" onClick="InsertarDatos();" name="Guardar" id="textfield" value="guardar" class="botones"></td>
    	    </tr>
	      </table>
          <div id="resultadosProyectos" align="center" >
        			</div>
      	</form>
			</div>
            
           
	</div><!--CIERRA contenedor menu proyectos-->
   
</div><!--CIERRA A DIV PROYECTOS-->

<!--INICIA DIV USUARIOS-->


<div id="clientes">
	    <div id="titulo4"><img src="img/usuarios.png" width="350px" height="90px"></div>	
    <div><!--contenedor menu proyectos-->
    	<div id="conPro3">
        	<img src="img/busCli.png" width="200px" height="50px">
        </div>  
        
	    <div id="zzz5">
    		<div >
            	<input  type="text" size="40" class="caja3" id="valorUsu" onKeyUp="BuscarUsu();" placeholder="Nombre o Cedula "/> 
			      <div id="resultadosUsu" class="resultadosUsu" ></div>

			</div>	                    
	    </div><!--div zzz5-->  
        
       <div id="menIngProy3" align="center"><img src="img/ingCli.png" width="200px" height="50px"></div>
            <div  align="center" id="zzz6">    
		<form action="" method="get" name="ingresarUsu" id="formUsuarios">
           <table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td ><label>Identificacion</label></td>
            </tr>
              <tr>
                <td><input type="text" class="caja3"  name="idUsuario" id="idUsuario"  maxlength="10"/></td>
              </tr>
              
                <tr>
              <td ><label>Nombre</label></td>
            </tr>
              <tr>
                <td><input type="text" class="caja3"   name="nomUsu" id="nomUsu" maxlength="50"/></td>
              </tr>
              
                <tr>
              <td ><label>Apellido</label></td>
            </tr>
              <tr>
                <td><input type="text" class="caja3"  name="apeUsu" id="apeUsu" maxlength="50"/></td>
              </tr>
              
                <tr>
              <td ><label>Tipo Usuario</label></td>
            </tr>
              <tr>
                <td><select name="tipUsu" id="tipUsu" class="caja3">
                  <option value="Cliente">Cliente</option>
                  <option value="Programador">Programador</option>
                  <option value="Administrador">Administrador</option>
                  </select>
                  </td>
              </tr>      
                    <tr>
              <td ><label> Genero</label></td>
            </tr>
                </tr>
              <tr>
                <td><select name="genUsu"  id="genUsu" class="caja3">
                  <option value="Masculino">Masculino</option>
                  <option value="Femenino">Femenino</option>
                  </select>
                  </td>
              </tr>
                 <tr>
              <td ><label>Telefono</label></td>
            </tr>
                </tr>
              <tr>
                <td><input type="text" class="caja3"  name="celUsu" id="celUsu" maxlength="12" required/>
                  </td>
              </tr>
              <tr>
              <td ><label>Direccion</label></td>
            </tr>
                </tr>
              <tr>
                <td><input type="text" class="caja3"  id="dirUsu" maxlength="30" />
                  </td>
              </tr>
                  <tr>
              <td ><label>Correo</label></td>
            </tr>
                </tr>
              <tr>
                <td><input type="email" class="caja3" name="corUsu" id="corUsu" />
                  </td>
              </tr>
                    <tr>
              <td ><label>Contrasena</label></td>
            </tr>  
                </tr>
              <tr>
                <td><input type="password" class="caja3"  name="conUsu" id="conUsu" required/>
                  </td>
              </tr>
             <tr>
              <td align="center" >
                   <input type="button" class="botones" onClick="InsertarUsu();" name="guardarUsu" id="textfield" value="Guardar">
          
              </td>
            </tr>
          </table>
<div id="resultadosActUsuario" align="center">
        			</div>

      	</form>
			</div>
</div>
</div>
<!---------------------------------------SECCION DE ACTIVIDADES----------------------------------->
<div  id="actividades">
		    <div id="titulo5"><img src="img/actividades.png" width="350px" height="90px"></div>	
    <div><!--contenedor menu proyectos-->
    	<div id="conPro4">
        	<img src="img/busAct.png" width="200px" height="50px">
        </div>  
        
	    <div id="zzz7">
    		<div >
            	<input  type="text" size="40" class="caja3" id="valorAct" onKeyUp="BuscarAct();" placeholder="Nombre Actividad o C.C Programador "/> 
			      <div id="resultadosAct" class="resultadosAct" ></div>
			</div>	                    
	    </div><!--div zzz-->  
        
       <div id="menIngProy4" align="center"><img src="img/ingAct.png" width="200px" height="50px"></div>
            <div  align="center" id="zzz8">    
				<form action="" method="get" name="ingresarAct" id="ingresarAct" >
 <table align="center" width="auto" border="0" cellspacing="0" cellpadding="0">
   
    <tr>
    <td ><label>Actividad</label></td>
  </tr>
    <tr>
      <td><input type="text" class="caja3"  name="nomAct" id="nomAct" /></td>
    </tr>
    
      <tr>
    <td ><label>Fecha Inicio Actividad</label></td>
  </tr>
    <tr>
      <td>
      <input type="date" id="fecIact" name="fecIact" class="caja3" />
      </td>
    </tr>
    
      <tr>
    <td ><label>Fecha Fin Actividad</label></td>
  </tr>
    <tr> <td><input type="date"   name="fecFact" id="fecFact" class="caja3" /></td>
    </tr>      
          <tr>
    <td ><label>Tiempo En la Actividad</label></td>
  </tr>
      </tr>
    <tr>
      <td><input type="text"  name="HH" id="HH" class="caja3" /></td>
    </tr>
	   <tr>
    <td ><label>Estado Actividad</label></td>
  </tr>
      </tr>
    <tr>
      <td> <select name="estAct" id="estAct" class="caja3">
				<option value="Proceso">En Proceso</option>
				<option value="Suspendido">Suspendido</option>
		  		<option value="Finalizado">Finalizado</option>
			</select>
		</td>
    </tr>
    <tr>
    <td ><label>Programador</label></td>
  </tr>
      </tr>
    <tr>
      <td><?php
//				$sql="SELECT * FROM usuario";
				$sql="SELECT idUsu,nomUsu FROM usuario WHERE (CONVERT(  `tipUsu` USING utf8 ) LIKE  'Programador')";
				$consulta=mysql_query($sql)	?>
			<select name="idPro" id="idPro" class="caja3">    
			    <?php    
			    while ( $row = mysql_fetch_assoc($consulta) ){ ?>    
		        <option value=" <?php echo $row['idUsu'] ?> " ><?php echo $row['nomUsu']; ?></option>        
	    	    <?php } ?>        
			</select> 
		</td>
    </tr>
        <tr>
    <td ><label>Proyecto</label></td>
  </tr>
      </tr>
    <tr>
      <td><?php
				$sql="SELECT * FROM proyecto";
//				$sql="SELECT idProy,nomProy FROM proyecto WHERE (CONVERT(  `tipUsu` USING utf8 ) LIKE  'Programador')";
				$consulta=mysql_query($sql)	?>
			<select name="idProy" id="idProy" class="caja3">    
			    <?php    
			    while ( $row = mysql_fetch_assoc($consulta) ){ ?>    
		        <option value=" <?php echo $row['idProy'] ?> " ><?php echo $row['nomProy']; ?></option>        
	    	    <?php } ?>        
			</select> 
		</td>    
   <tr>
    <td align="center">
  	     <input type="button" onClick="InsertarAct();" name="guardarUsu" id="textfield" value="Guardar" class="botones">
    </td>
  </tr>
   
</table>
<div id="resultadosActError" align="center">
        			</div>

      	</form>
  </div>
  </div>
</div><!---FIN ACTIVIDADES-->
<center>
<div id="reportes"><!--INICIA REPORTES-->
		    <div id="kk"><img src="img/reportes.png" width="350px" height="90px"></div>	
    <div><!--contenedor menu reportes-->
    	<div id="xx">
        	<img src="img/repActPro.png" width="260px" height="75px">
        </div>  
        
	    <div id="yy">
    		<div >
            	<!--aqui iba la caja de buscar-->
			      <div id="resultadosRep" class="resultadosRep" >hola1</div>
			</div>	                    
	    </div><!--div zzz-->  
        
       <div id="uu" align="center" onClick="tablas();"><img src="img/TT.png" width="260px" height="75px"></div>
            <div  align="center" id="jj">
	
			</div>

</div><!--FIN DE REPORTES-->
<div id="instrucciones">
<center>
1. INGRESAR UN USUARIO<br>
2. INGRESAR UN PROYECTO Y ASIGNARLE UN PROPIETARIO<br>
3. INGRESAR ACTIVIDADES AL PROYECTO Y UN PROGRAMADOR PARA QUE LAS DESARROLLE<br>
4. CONSULTAR SUS ACTIVIDADES PROGRAMADOR Y CLIENTE</center>
</div>
</div>
<h1 align=center><img src="img/MJSOFT.gif" width="300px" height="90px"></h1>
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
