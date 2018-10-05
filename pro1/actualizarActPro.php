<?php 
include("control.php");//incluye una pagina
$con=new control();//instanciando un objeto
$con->conectar();
//		ajax.open("GET","actualizarActPro.php?ide="+q+"&nom="+no+"&fei="+fi+"&fef="+ff+"&hha="+hh+"&est="+es+"&ipro="+idp+"&imagen="+img+"&idproy="+idy); llega del ajax
$codigo=$_POST["idAct"];
//$nombre=$_POST["nomAct"];
//$fecIniAct=$_POST["fecIniAct"];
//$fecFinAct=$_POST["fecFinAct"];
//$HHAct=$_POST["HHAct"];
$estAct=$_POST["estAct"];
//$idPro=$_POST["idPro"];
//$imagen=$_FILES["imagen"];
//$idProy=$_POST["idProy"];
//echo $imagen;

//comprobamos si ha ocurrido un error.
if (!isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
    echo "ha ocurrido un error IMAGEN NO SELECCIONADA";
} else {
    //ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
    //y que el tamano del archivo no exceda los 16mb
    $permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
    $limite_kb = 16384; //16mb es el limite de medium blob
     
    if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
     
	 	$nombreFoto=$_FILES['imagen']['name'];
		$ruta=$_FILES['imagen']['tmp_name'];//ruta temporal
		copy($ruta,"img/imgActividades/$nombreFoto");


//$act=mysql_query("UPDATE cronograma SET nomAct='$nombre' WHERE idAct='$codigo'");
//$resultado=mysql_query("UPDATE cronograma SET fecIniAct='$fecIniAct' WHERE idAct='$codigo'");
//$resultado=mysql_query("UPDATE cronograma SET fecFinAct='$fecFinAct' WHERE idAct='$codigo'");
//$resultado=mysql_query("UPDATE cronograma SET HHAct='$HHAct' WHERE idAct='$codigo'");
$resultado=mysql_query("UPDATE cronograma SET estAct='$estAct' WHERE idAct='$codigo'");
$resultado=mysql_query("UPDATE cronograma SET imagen='$nombreFoto' WHERE idAct='$codigo'");
//$resultado=mysql_query("UPDATE cronograma SET idPro='$idPro' WHERE idAct='$codigo'");
//$resultado=mysql_query("UPDATE cronograma SET idProy='$idProy' WHERE idAct='$codigo'");

/*/////////////////////////////////////////*/

       // $resultado = mysql_query("INSERT INTO imagenes (imagen, tipo_imagen) VALUES ('$data', '$tipo')");
        if ($resultado){
            echo "el archivo ha sido copiado exitosamente";
			header('Location: programador.php');
        } else {
            echo "ocurrio un error al copiar el archivo.";
        }
    } else {
        echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
    }
}


//		ajax.open("GET","actualizarActPro.php?ide="+q+"&nom="+no+"&fei="+fi+"&fef="+ff+"&hha="+hh+"&est="+es+"&ipro="+idp+"&imagen="+img+"&idproy="+idy); llega del ajax
//$codigo=$_GET["ide"];
//$nombre=$_GET["nom"];
//$fecIniAct=$_GET["fei"];
//$fecFinAct=$_GET["fef"];
//$HHAct=$_GET["hha"];
//$estAct=$_GET["est"];
//$idPro=$_GET["ipro"];
//$imagen=$_GET["imagen"];
//$idProy=$_GET["idproy"];
//echo $imagen;
//
//$act=mysql_query("UPDATE cronograma SET nomAct='$nombre' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET fecIniAct='$fecIniAct' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET fecFinAct='$fecFinAct' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET HHAct='$HHAct' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET estAct='$estAct' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET imagen='$imagen' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET idPro='$idPro' WHERE idAct='$codigo'");
//$act=mysql_query("UPDATE cronograma SET idProy='$idProy' WHERE idAct='$codigo'");
//
//if($act)
//{
//	print'Se Actualizo correctamente';
//	echo"<meta content=1 http-equiv=REFRESH> </meta>";
//}else
//{
//	print'Se Produjo un  Erroooor';
//	echo"<meta content=1 http-equiv=REFRESH> </meta>";
//	}


?>