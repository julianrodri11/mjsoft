<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
//ajax.open("GET","guardarAct.php?ide="+q+"&nom="+no+"&fei="+fi+"&fef="+ff+"&hha="+hh+"&est="+es+"&ipro="+idp+"&idprog="+idy); lo que me envia ajax 
$codigo=$_GET["ide"];
$nombre=$_GET["nom"];
$fecIniAct=$_GET["fei"];
$fecFinAct=$_GET["fef"];
$HHAct=$_GET["hha"];
$estAct=$_GET["est"];
$idPro=$_GET["ipro"];
$idProy=$_GET["idprog"];

$act=mysql_query("UPDATE cronograma SET nomAct='$nombre' WHERE idAct='$codigo'");
$act=mysql_query("UPDATE cronograma SET fecIniAct='$fecIniAct' WHERE idAct='$codigo'");
$act=mysql_query("UPDATE cronograma SET fecFinAct='$fecFinAct' WHERE idAct='$codigo'");
$act=mysql_query("UPDATE cronograma SET HHAct='$HHAct' WHERE idAct='$codigo'");
$act=mysql_query("UPDATE cronograma SET estAct='$estAct' WHERE idAct='$codigo'");
$act=mysql_query("UPDATE cronograma SET idPro='$idPro' WHERE idAct='$codigo'");
$act=mysql_query("UPDATE cronograma SET idProy='$idProy' WHERE idAct='$codigo'");

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