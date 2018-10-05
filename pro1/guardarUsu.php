<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
//	ajax.open("GET","guardarUsu.php?ide="+q+"&nom="+no+"&ape="+ap+"&tip="+ti+"&gen="+ge+"&tel="+ce+"&dir="+di+"&corr="+cor+"&cont="+con); lo que me envia ajax 
$codigo=$_GET["ide"];
$nombre=$_GET["nom"];
$apellido=$_GET["ape"];
$tipo=$_GET["tip"];
$genero=$_GET["gen"];
$telefono=$_GET["tel"];
$direccion=$_GET["dir"];
$correo=$_GET["corr"];
$contrasena=$_GET["cont"];
$act=mysql_query("UPDATE usuario SET nomUsu='$nombre' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET apeUsu='$apellido' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET tipUsu='$tipo' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET genUsu='$genero' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET celUsu='$telefono' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET dirUsu='$direccion' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET corUsu='$correo' WHERE idUsu='$codigo'");
$act=mysql_query("UPDATE usuario SET conUsu='$contrasena' WHERE idUsu='$codigo'");
if($act)
{
	print'Se Actualizo correctamente';
	echo"<meta content=1 http-equiv=REFRESH> </meta>";
}else
{
	print'Se Produjo un  Erroooor';
	echo"<meta content=1 http-equiv=REFRESH> </meta>";
	}


?>