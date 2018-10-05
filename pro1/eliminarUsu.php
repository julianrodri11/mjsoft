<?php 

include("control.php");//incluye una pagina
$cod = $_GET["q"]; //varible get desde el formulario
//echo"$cod";
$con=new control();//instanciando un objeto
$con->conectar();//el objeto inboca a la clase
$con->eliminar_registro('usuario','idUsu',$cod); //envio los diferentes campos a eliminar nombre de la tabla id de la tabla y el registro a eliminar


?>