
<!--OPCION QUE RESIVE EL ID DEL CLIENTE Y BUSCA SUS ACTIVIDADES CORRESPONDIENTES-->
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['v'];

if($q==null) //si la varible del ayax de inicio de sesion contiene no es nulla
{print'Ingrese algun dato';}
else
{
	$sentenciaSql="SELECT `cronograma`.`idAct`,`cronograma`.`nomAct`,`cronograma`.`imagen`,`proyecto`.`nomProy`,`proyecto`.`estProy`,`cronograma`.`estAct` FROM proyecto LEFT JOIN `mjsoft`.`cronograma` ON `proyecto`.`idProy` = `cronograma`.`idProy` WHERE (`proyecto`.`idUsu`=$q)";
	$con->Buscar($sentenciaSql,'ninguna');//LA VARIABLE NINGURA SIRVE PARA VALIDAR Y MOSTRAR LOS DATOS SIN PODERLOS MODIFICAR

}

?>