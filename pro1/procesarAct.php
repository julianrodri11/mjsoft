<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$v=$_GET['v'];
if($v==null) //si la caja de texto no tiene nada entonces por v muestra  msg por falso muestra datos
{print'Ingrese algun dato';}
else
{
	$tabla='cronograma';
	$campo1='nomAct';
	$campo2='idPro';
	$sentenciaSql="SELECT * FROM $tabla WHERE $campo1 LIKE '%$v%' or $campo2 LIKE '%$v%'";
	$con->Buscar($sentenciaSql,$tabla);
	
//	$con->Buscar('cronograma','nomAct',$v,'idPro');
}
 

?>