<?php 

//EN ESTE ARCHIVO RECIBO LA VARIABLE DE SESSION(CEDULA) DEL PROGRAMADOR Y BUSCO EN LA BASE 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['v'];
//echo $q;
if($q==null) //si la caja de texto no tiene nada entonces por v muestra  msg por falso muestra datos
{print'Ingrese algun dato';}
else
{
	$tabla='activprog';

//	$sentenciaSql="SELECT * FROM $tabla WHERE $campo1 LIKE '%$q%' or $campo2 LIKE '%$q%'";
	$sentenciaSql="SELECT `cronograma`.`idAct`,  `cronograma`.`nomAct` ,  `proyecto`.`nomProy` , `cronograma`.`imagen` ,  `cronograma`.`estAct` ,  `cronograma`.`HHAct` , `cronograma`.`fecFinAct` ,  `cronograma`.`fecIniAct`,`usuario`.`nomUsu` ,  `usuario`.`apeUsu` FROM usuario LEFT JOIN  `mjsoft`.`cronograma` ON  `usuario`.`idUsu` =  `cronograma`.`idPro` LEFT JOIN  `mjsoft`.`proyecto` ON  `cronograma`.`idProy` =  `proyecto`.`idProy` WHERE (`usuario`.`idUsu` = $q)";

	$con->Buscar($sentenciaSql,$tabla);


}

?>