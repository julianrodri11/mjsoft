
<!--REPORTES-->
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['rep'];

$sentenciaSql="SELECT  `proyecto`.`nomProy` ,  `cronograma`.`nomAct` ,  `cronograma`.`estAct` ,  `cronograma`.`sugAct` ,  `usuario`.`nomUsu` ,  `usuario`.`apeUsu` 
FROM proyecto LEFT JOIN  `mjsoft`.`cronograma` ON  `proyecto`.`idProy` =  `cronograma`.`idProy` LEFT JOIN  `mjsoft`.`usuario` ON  `cronograma`.`idPro` =  `usuario`.`idUsu` ";
	$con->Buscar($sentenciaSql,'vacio');//vacio para q no me cargue ninguna opcion como editar o eliminar 



?>