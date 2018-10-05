<?php 
	include("control.php");//incluye una pagina
	$con=new control();//instanciando un objeto
	$con->conectar();

	//	ajax.open("GET","sugerenciasActulizar.php?idAct="+idAct+"&sugAct="+sugAct);
	$codigo=$_GET['idAct'];
	$sugAct=$_GET["sugAct"];

	$resultado="UPDATE cronograma SET sugAct='$sugAct' WHERE idAct='$codigo'";
	$ejecuta=mysql_query($resultado) or die (mysql_error()); 
    if ($ejecuta){
        echo "Sugerencia enviada";
		echo"<meta content='2' http-equiv='REFRESH'> </meta>";

        } else {
           echo "ocurrio un error al ingresar su sugerencia!!!! ";
        }

?>