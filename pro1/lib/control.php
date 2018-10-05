<!--<script language="javascript">	
function valida(valor)
{
if(confirm("Realmente desea eliminar el registro..........."))
	{
	location.href="eliminar_get.php?id="+valor;
	}
}
</script>	-->

<?php
class control
{
		var $conexion;
		public function conectar()
		{
			//variables 
			$conexion=mysql_pconnect('localhost','root','root') or die("no se conecto".mysql_error());
			mysql_select_db("panaderia",$conexion)or die("no Existe la base de datos".mysql_error());
			return $conexion;
		}//end conectar
		
		
		
		//funcion que busca registros individualmente a traves de un parametro
		function Buscar($tabla,$idTabla,$q)
		{				//$sql="SELECT * FROM pan WHERE idPan LIKE '%$q%'";
		$sql="SELECT * FROM $tabla WHERE $idTabla LIKE '%$q%'";
		
		$error = "no se pueden mostrar los datos". mysql_error();
		$consulta = @mysql_query($sql) or die ($error);
		if(mysql_num_rows($consulta)<=0)//si la consulta tubo exito
		{print'No se encontro ningun resultado';}
		else
		{///por falso me llena todos el registro encontrado
		$max = mysql_num_fields($consulta) ;
		echo "<table border=0 width=60% align=center>";
		echo "<tr>";//para la cabecera
		for($i = 0; $i < $max; $i++)
		{
			$campos[$i] = @mysql_field_name($consulta, $i);
			echo "<th>".$campos[$i]."</th>";
		}
		$k = 0;
		while($row = @mysql_fetch_array($consulta))
		{ 
			echo "<tr align='center'";
			if($k % 2 == 0) echo "bgcolor='#FF9933'"; 
			echo ">"; $j =0; 

		  for($i = 0; $i < $max; $i++)
		  	{		
			$datos[$j][$campos[$i]] = $row[$campos[$i]]; 
			$id[$i] = $row[$campos[0]]; 
			echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; 
			//sirve para imprimir todos los datos
			} 
//			echo"<td><a href='editar.php?q=".$row[$campos[0]]."'>EditaRr</td>";  //parametros que se le agregar para editar por get
			echo"<td><a href=# onClick='Editar(".$row[$campos[0]].")'>EditaRr</td>";  //parametros que se le agregar para editar por get
			echo"<td><a href=# onClick='Confirmar(".$row[$campos[0]].")'>Eliminar</td>";//hace una pregunta a la func valida en el evento click
		$k++; $j++;
		}
		echo "</tr>";
		echo "</table>";		
		}
		}//en funcion buscar
		




	//crea combo o rellena un combo  solo con estos parametros
	public function crea_combo($nombre,$tabla,$valor,$etiqueta)
	{

		echo("<select name=$nombre>");
		echo("<option value='0'>Seleccione</option>");
		$sql="SELECT * FROM $tabla";
		$consulta=mysql_query($sql);
		while($campos=mysql_fetch_assoc($consulta))
		{
			echo "<option value='".$campos[$valor]."'>".htmlentities($campos[$etiqueta])."</option>";
		}
		echo("</select>");
	}//end combo


//Funcion Mostrar Solo registros de la tabla
function mostrar_registros($tabla)
{
$sql="select * from $tabla";
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql) or die ($error);
$max = mysql_num_fields($consulta) ;
echo "<table border=0 width=60% align=center>";
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i);
echo "<th>".$campos[$i]."</th>";
}

$k = 0;
while($row = @mysql_fetch_array($consulta))
{ 
echo "<tr align='center'";
if($k % 2 == 0) echo "bgcolor='#FF9933'"; 
echo ">"; $j =0; 
for($i = 0; $i < $max; $i++){
$datos[$j][$campos[$i]] = $row[$campos[$i]]; 
$id[$i] = $row[$campos[0]]; 
echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; 

} 

$k++; $j++;
}

echo "</tr>";

echo "</table>";
} //end mostrar tablas



/////////////comienza modificar y eliminar tablas/////////////


//Funcion Mostrar modificar y eliminar registros de la tabla
function modificar_eliminar_registros($tabla)
{
$sql="select * from $tabla";
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql) or die ($error);//haga la consulta y si ocurreo algun error imprimalo
$max = mysql_num_fields($consulta) ;//numero de campos o columnas hay

echo "<table border=1 width=60% align=center>";//creo la tabla
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i); // saca el nombre de los campos 
echo "<th>".$campos[$i]."</th>";

}
//echo "<th>ELIMINAR</th>";

$k = 0;
echo"<th colspan='2' align='center'>Opciones</th>";
while($row = @mysql_fetch_array($consulta))
{ 
echo "<tr align='center'";

if($k % 2 == 0) echo "bgcolor='#E0F8F7'"; //para convinar y colorear las filas pares o impares segun sea el caso

echo ">"; $j =0; 

	for($i = 0; $i < $max; $i++) //crea las columnas dependiendo del maximo
	{
		$datos[$j][$campos[$i]] = $row[$campos[$i]]; //vectores bidimencionales
		$id[$i] = $row[$campos[0]]; //
		echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; //Los htmlentities () convierte los caracteres a entidades HTML.
	} 		
		echo"<td><a href='modificar_get.php?id=".$row[$campos[0]]."'>Editar</td>";  
		echo"<td><a href=# onClick='valida(".$row[$campos[0]].")'>Eliminar</td>";



$k++; $j++;
}

echo "</tr>";

echo "</table>";
} //end modificar y mostrar


//funcion eliminar registro
	function eliminar_registro($tabla,$id,$valor)
	{

		$sql =("DELETE FROM $tabla WHERE $id=$valor");
		$consulta=mysql_query($sql);
		if($consulta)	
		{
			echo"Registro Eliminado con Exito";
//			print'registro borrado';
		}

	}///en clase eliminar



//Funcion Mostrar IMAGENES
function modificar_eliminar_registros2($tabla)
{
$sql="select * from $tabla";
$error = "no se pueden mostrar los datos". mysql_error();
$consulta = @mysql_query($sql) or die ($error);//haga la consulta y si ocurreo algun error imprimalo
$max = mysql_num_fields($consulta) ;//numero de campos o columnas hay

echo "<table border=0 width=60% align=center>";//creo la tabla
echo "<tr>";
for($i = 0; $i < $max; $i++)
{
$campos[$i] = @mysql_field_name($consulta, $i); // saca el nombre de los campos 
echo "<th>".$campos[$i]."</th>";

}
//echo "<th>ELIMINAR</th>";

$k = 0;
echo"<th colspan='2' align='center'>Opciones</th>";
while($row = @mysql_fetch_array($consulta))
{ 
echo "<tr align='center'";

if($k % 2 == 0) echo ""; // bgcolor='#FF6600' para convinar y colorear las filas pares o impares segun sea el caso

echo ">"; $j =0; 

	for($i = 0; $i < $max; $i++) //crea las columnas dependiendo del maximo
	{
		$datos[$j][$campos[$i]] = $row[$campos[$i]]; //vectores bidimencionales
		$id[$i] = $row[$campos[0]]; //
		echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; 
	} 		
//		echo"<td><a href='eliminar_get.php?id=".$row[$campos[0]]."&nom=".$row[$campos[3]]."'>Elimiar imagen</td>";  		
		echo "<td><img src='../estilo/archivos/".$row[$campos[3]]."' width='150' height='150'></td>";



$k++; $j++;
}

echo "</tr>";

echo "</table>";
} //end modificar y mostrar

	
		//funcion que sirve para llenar campos en varios txt no se usa aun
		public function Editar($tabla,$idTabla,$q)
		{
		$sql="SELECT * FROM $tabla WHERE $idTabla LIKE '%$q%'";		
		$error = "no se pueden mostrar los datos". mysql_error();
		$consulta = @mysql_query($sql) or die ($error);
		if(mysql_num_rows($consulta)<=0)//si la consulta tubo exito
		{print'No se encontro ningun resultado';}
		else
		{///por falso me llena todos el registro encontrado
		$max = mysql_num_fields($consulta) ;
		echo "<table border=0 width=60% align=center>";
		echo "<tr>";
		for($i = 0; $i < $max; $i++)
		{
			$campos[$i] = @mysql_field_name($consulta, $i);
			echo "<th>".$campos[$i]."</th>";
		}
		
		$k = 0;
		while($row = @mysql_fetch_array($consulta))
		{ 
			echo "<tr align='center'";
			if($k % 2 == 0) echo "bgcolor='#FF9933'"; 
			echo ">"; $j =0; 
		  for($i = 0; $i < $max; $i++)
		  	{
			$datos[$j][$campos[$i]] = $row[$campos[$i]]; 
			$id[$i] = $row[$campos[0]]; 
			echo "<td align='justify'><input type='text' value='".htmlentities($datos[$j][$campos[$i]])."'></input></td>";
			} 
			echo"<td><a href='modificar_get.php?id=".$row[$campos[0]]."'>Actualizar Datos</td>";  //parametros que se le agregar para editar por get

		$k++; $j++;
		}
		echo "</tr>";
		echo "</table>";		
		}
		}//end llenar datos en txt


}//end clase control
?>
