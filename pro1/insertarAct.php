<?php
	include("control.php");//incluye una pagina
	$con=new control();//instanciando un objeto
	$con->conectar();//el objeto inboca a la clase
	//variables que me llegan del ajax 	//ajax.open("GET","insertarAct.php?nom="+no+"&feI="+fi+"&feF="+ff+"&ihh="+hh+"&est="+es+"&ipr="+ip+"&ipg="+ipg);
	$nomAct=$_GET["nom"];
	$fiAct=$_GET["feI"];
	$ffAct=$_GET["feF"];
	$ihAct=$_GET["ihh"];
	$estAct=$_GET["est"];
	$iprAct=$_GET["ipr"];
	$ipgAct=$_GET["ipg"];
	
		//	// Abree el archivo en modo binario
//	    $imagen = '../pro1/img/1.png';
//        $fp     = fopen($imagen, 'r+b'); 
//        //este es el tipo de archivo
//        $tipo="image/png"
//		;
//        //leer el archivo temporal en binario
//        $data = fread($fp, filesize($imagen));
//        fclose($fp);
//        //escapar los caracteres
//        $data = mysql_real_escape_string($data);
////		fpassthru($imagen);
	$data="1.png";


//	ajax.open("GET","insertarAct.php?nom="+no+"&feI="+fi+"&feI="+ff+"&ihh="+hh+"&est="+es+"&ipr="+ip+"&ipg="+ipg);
	
	$sql="INSERT INTO cronograma values('','$nomAct','$fiAct','$ffAct','$ihAct','$estAct','$data','$iprAct','$ipgAct','')";	
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