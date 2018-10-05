<?php 
//RECIBIR LA VARIBLE DEL AJAX EL ID DEL PROGRAMADOR PARA MIRAR SUS ACTIVIDADES Y LAS SUGERENCIAS QUE LE AN HECHO 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$v=$_GET['idAct'];
if($v==null) //si la caja de texto no tiene nada entonces por v muestra  msg por falso muestra datos
{print'Ingrese algun dato';}
else
{
	$tabla='activprog';
	$sentenciaSql="SELECT `cronograma`.`nomAct`,`cronograma`.`sugAct`,`proyecto`.`nomProy`FROM usuario LEFT JOIN `mjsoft`.`cronograma` ON `usuario`.`idUsu` = `cronograma`.`idPro` LEFT JOIN `mjsoft`.`proyecto` ON `cronograma`.`idProy` = `proyecto`.`idProy` WHERE (`cronograma`.`idPro` = $v)";
	$con->Buscar($sentenciaSql,'vacio');
	

}
 

?>