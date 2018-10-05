<?php
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();//el objeto inboca a la clase


	$nomProy=$_GET["noEnv"];
	$estProy=$_GET["estEnv"];
	$ideUsu=$_GET["ideEnv"];
	//noEnv="+noPy+"&estEnv="+esPy+"&ideEnv="+idUs);
	
	$sql="INSERT INTO proyecto values('','$nomProy','$estProy','$ideUsu')";
	$consulta=mysql_query($sql);
	if($consulta)
		{echo"DATOS INSERTADOS CON EXITO";
		echo"<meta content=1 http-equiv=REFRESH> </meta>";
		}
	else
		{echo"ERROR... DATOS NO INGRESADOS";
		echo"<meta content=1 http-equiv=REFRESH> </meta>";
		}

?>