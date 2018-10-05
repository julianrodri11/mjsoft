<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['q'];
if($q==null) //si la caja de texto no tiene nada entonces por v muestra  msg por falso muestra datos
{print'Ingrese algun dato';}
else
{
	$tabla='proyecto';
	$sentenciaSql="SELECT * FROM $tabla WHERE nomProy LIKE '%$q%' or idUsu LIKE '%$q%'";
	$con->Buscar($sentenciaSql,$tabla);

}

?>