<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$codigo=$_GET["id"];
$nombre=$_GET["nom"];
$costo=$_GET["costo"];
$imagen=$_GET["imagen"];//id="+q+"&nom="+no+"&costo="+cost+"&imagen="+img);
$act=mysql_query("UPDATE proyecto SET nomProy='$nombre' WHERE idProy='$codigo'");
$act=mysql_query("UPDATE proyecto SET estProy='$costo' WHERE idProy='$codigo'");
$act=mysql_query("UPDATE proyecto SET idUsu='$imagen' WHERE idProy='$codigo'");
if($act)
{
	print'Se Actualizo correctamente';
	echo"<meta content=1 http-equiv=REFRESH> </meta>";
}else
{
	print'Se Produjo un  error';
	echo"<meta content=1 http-equiv=REFRESH> </meta>";
	}


?>