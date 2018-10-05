<?php
session_start();



	
if(isset($_POST['user']) && !empty($_POST['user']) &&
   isset($_POST['pw']) && !empty($_POST['pw']))
{
	$var= $_POST['user']  ;	
	$pw = $_POST['pw'];	
    include("control.php");//incluye una pagina
	$con=new control();//instanciando un objeto
	$con->conectar();//el objeto inboca a la clase
//	$sql=mysql_query("SELECT * FROM cronograma.usuario WHERE corUsu='$var' AND conUsu='$pw'") or die(mysql_error());
	$sql=mysql_query("SELECT * FROM usuario WHERE corUsu='$var' AND conUsu='$pw'") or die(mysql_error());
    $sesion=mysql_fetch_array($sql);
    if($_POST['pw'] == $sesion['conUsu'])
        {
			  $_SESSION['corUsu'] = $_POST['user'];	
			  $_SESSION['tipUsu'] = $sesion['tipUsu'];
			  $_SESSION['idUsu'] = $sesion['idUsu'];
			  echo $_SESSION['idUsu'];
			 // echo "Sesion Exitosa<br>";		  
			 // echo "Bienbenido:<br> ". $_SESSION['corUsu'];

//			 echo $sesion['tipUsu'];
			 
			 if("Administrador"==$sesion['tipUsu'])
				{header('Location: admin.php');}				
			 elseif("Cliente"==$sesion['tipUsu'])
			  		{ header('Location: clientes.php');}
					elseif("Programador"==$sesion['tipUsu'])
					{header('Location: programador.php');}


//			  echo "<br><a href=destruir.php> Cerrar Sesion</a>";
		
			  
        }else
            { echo "Verifica tus datos el Usuario no esta registrado<br><a href=loguin.html> Volver</a>";
            }
    
}else
    {
    echo"debes llenar ambos campos";   
    }
    
?>
