<!--REPORTES-->
<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
$q=$_GET['rep'];
echo"<br><center>";

$sql="select * from proyecto";
$sql2="select * from cronograma";
$sql3="select * from usuario";
echo"<center><label>TABLA DE POYECTOS</label>";
$con->Buscar($sql,'vacio');
echo"<center><label>TABLA DE ACTIVIDADES</label>";

$con->Buscar($sql2,'vacio');
echo"<center><label>TABLA DE USUARIOS</label>";

$con->Buscar($sql3,'vacio');




?>