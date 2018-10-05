<link href="hojas/style.css" rel="stylesheet" type="text/css" />

<?php
class control
{
		var $conexion;
		public function conectar()
		{
			//variables 
			$conexion=mysql_pconnect('localhost','root','nbuser') or die("no se conecto".mysql_error());
			mysql_select_db("mjsoft",$conexion)or die("no Existe la base de datos".mysql_error());
			return $conexion;
		}//end conectar
		
		//crea combo
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
		

//			function Buscar($tabla,$idTabla,$q,$campo2)
			function Buscar($sentenciaJR,$tabla)
		{			
		//$sql="SELECT * FROM pan WHERE idPan LIKE '%$q%'";
		//busca por dos campos
		//$sql="SELECT * FROM $tabla WHERE $idTabla LIKE '%$q%' or $campo2 LIKE '%$q%'";		
		$sql="$sentenciaJR";		
		$error = "no se pueden mostrar los datos". mysql_error();
		$consulta = @mysql_query($sql) or die ($error);
		if(mysql_num_rows($consulta)<=0)//si la consulta tubo exito
		{print'No se encontro ningun resultado';}
		else
		{///por falso me llena todos el registro encontrado
		$max = mysql_num_fields($consulta) ;
		echo "<table class=table3 border=0 width=60% align=center>";
		echo "<thead><tr>";//para la cabecera
		for($i = 0; $i < $max; $i++)
		{
			$campos[$i] = @mysql_field_name($consulta, $i);
			echo "<th>".$campos[$i]."</th>";
		}
		$k = 0;
		while($row = @mysql_fetch_array($consulta))
		{ 
			echo "</thead><tr align='center'";
			if($k % 2 == 0) echo "bgcolor='#FF9933'"; 
			echo ">"; $j =0; 

		  for($i = 0; $i < $max; $i++)
		  	{		
			$datos[$j][$campos[$i]] = $row[$campos[$i]]; 
			$id[$i] = $row[$campos[0]]; 
			echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; 
			//sirve para imprimir todos los datos
			} 
			if($tabla=="proyecto")
			{
			//parametros que se le agregar para editar por get
			echo"<td><a href=# onClick='Editar(".$row[$campos[0]].")'><img src='img/editar.png' width='50px' height='50px'></td>";  //parametros que se le agregar para editar por get
			echo"<td><a href=# onClick='Confirmar(".$row[$campos[0]].")'><img src='img/eliminar.png' width='50px' height='50px'></td>";//hace una pregunta a la func valida en el evento click
			}else /*if($tabla=="programador"){
					echo"<td><a href=# onClick='EditarProg(".$row[$campos[0]].")'><img src='img/editar.png' width='50px' height='50px'></td>";  
					echo"<td><a href=# onClick='ConfirmarProg(".$row[$campos[0]].")'><img src='img/eliminar.png' width='50px' height='50px'></td>";
					}else*/ if($tabla=="usuario"){
					echo"<td><a href=# onClick='EditarUsu(".$row[$campos[0]].")'><img src='img/editar.png' width='50px' height='50px'></td>";  
					echo"<td><a href=# onClick='ConfirmarUsu(".$row[$campos[0]].")'><img src='img/eliminar.png' width='50px' height='50px'></td>";
					}elseif($tabla=="cronograma")
					{
					echo "<td><img src='../pro1/img/imgActividades/".$row[$campos[6]]."' width='70' height='70'></td>";
					echo"<td><a href=# onClick='EditarAct(".$row[$campos[0]].")'><img src='img/editar.png' width='50px' height='50px'></td>";  
					echo"<td><a href=# onClick='ConfirmarAct(".$row[$campos[0]].")'><img src='img/eliminar.png' width='50px' height='50px'></td>";
					}elseif($tabla=="activprog")
					{
					//llama a las funciones en ajax
					echo "<td><img src='../pro1/img/imgActividades/".$row[$campos[3]]."' width='40' height='40'></td>";
					echo"<td><a href=# onClick='EditarActPro(".$row[$campos[0]].")'><img src='img/1.png' width='50px' height='50px'></td>";  											                    }
					else if($tabla=="ninguna")
					{
					echo"<td><a href=# onClick='SugerenciasUsu(".$row[$campos[0]].")'><img src='img/sugerencia.png' width='50px' height='50px'></td>";
					echo "<td><img src='../pro1/img/imgActividades/".$row[$campos[2]]."' width='40' height='40'></td>";
					}
					
		$k++; $j++;
		}
		echo "</tr>";
		echo "</table>";		
		}
		@mysql_close ($conexion);


		}//en funcion buscar
		

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
@mysql_close ($conexion);
} //end mostrar tablas

//funcion eliminar registro
	function eliminar_registro($tabla,$id,$valor)
	{
		$sql =("DELETE FROM $tabla WHERE $id=$valor");
		$consulta=mysql_query($sql);
		if($consulta)	
		{
			echo"Registro Eliminado con Exito";	
			echo"<meta content=1 http-equiv=REFRESH> </meta>";
		}
	@mysql_close ($conexion);
	}///end clase eliminar
	

	
////////////////////////////////	BUSCAR2222 no la utilizo aun

//		SELECT * FROM cronograma WHERE idAct LIKE 1 or idPro LIKE 1088591520
		//$con->Buscar('cronograma','nomAct',$q,'idPro',$r);
		//funcion que busca registros  por dos campos en la tabla 
		function Buscar2($q)
		{				//$sql="SELECT * FROM pan WHERE idPan LIKE '%$q%'";
		$sql="$q";
		
		$error = "no se pueden mostrar los datos". mysql_error();
		$consulta = @mysql_query($sql) or die ($error);
		if(mysql_num_rows($consulta)<=0)//si la consulta tubo exito
		{print'No se encontro ningun resultado';}
		else
		{///por falso me llena todos el registro encontrado
		$max = mysql_num_fields($consulta) ;
		echo "<table class=table3 border=0 width=60% align=center>";
		echo "<thead><tr>";//para la cabecera
		for($i = 0; $i < $max; $i++)
		{
			$campos[$i] = @mysql_field_name($consulta, $i);
			echo "<th>".$campos[$i]."</th>";
		}
		$k = 0;
		while($row = @mysql_fetch_array($consulta))
		{ 
			echo "</thead><tr align='center'";
			if($k % 2 == 0) echo "bgcolor='#FF9933'"; 
			echo ">"; $j =0; 

		  for($i = 0; $i < $max; $i++)
		  	{		
			$datos[$j][$campos[$i]] = $row[$campos[$i]]; 
			$id[$i] = $row[$campos[0]]; 
			echo "<td align='justify'>". htmlentities($datos[$j][$campos[$i]])."</td>"; 
			//sirve para imprimir todos los datos
			} 
			
		$k++; $j++;
		}
		echo "</tr>";
		echo "</table>";		
		}
		@mysql_close ($conexion);


		}//en funcion buscar
	
	
}//end clase control
?>
