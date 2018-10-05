<?php
	include("control.php");//incluye una pagina
	$con=new control();//instanciando un objeto
	$con->conectar();//el objeto inboca a la clase
	$ideUsu=$_GET["id"];
	$nomUsu=$_GET["nom"];
	$apeUsu=$_GET["ape"];
	$tipUsu=$_GET["tip"];
	$genUsu=$_GET["gen"];
	$celUsu=$_GET["cel"];
	$dirUsu=$_GET["dir"];
	$corUsu=$_GET["cor"];
	$conUsu=$_GET["cont"];			
	//$sql="INSERT INTO usuario values('".$_GET["idU"]."','".$_GET["nom"]."','".$_GET["ape"]."','".$_GET["tip"]."','".$_GET["gen"]."','".$_GET["cel"]."','".$_GET["dir"]."','".$_GET["cor"]."','".$_GET["cont"]."')";
	
	$sql="INSERT INTO usuario values('$ideUsu','$nomUsu','$apeUsu','$tipUsu','$genUsu','$celUsu','$dirUsu','$corUsu','$conUsu')";
	
	$error = "Error al intentar agregar los datos". mysql_error();
	$consulta=@mysql_query($sql) or die ($error);
	if($consulta)
		{
		mysql_close($con->conectar());
		echo"DATOS INSERTADOS CON EXITO";		
		echo"<meta content=1 http-equiv=REFRESH> </meta>";
		}
	else
		{
		mysql_close($con->conectar());
		echo"ERROR... DATOS NO INGRESADOS";
		echo"<meta content=1 http-equiv=REFRESH> </meta>";
		}
		

?>