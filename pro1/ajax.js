function control(){ 
var xmlhttp=false; 
try { 
xmlhttp = new ActiveXObject("Msxml2.XMLHTTP"); 
} catch (e) { 
try { 
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); 
} catch (E) { 
xmlhttp = false; 
} 
} 
if (!xmlhttp && typeof XMLHttpRequest!='undefined') { 
xmlhttp = new XMLHttpRequest(); 
} 
return xmlhttp; 
} 

function InsertarDatos()
	{
	/*var	co= document.getElementById('codigo').value;*/
	var	noPy= document.getElementById('nomProy').value;
	var	esPy= document.getElementById('estProy').value;
	var	idUs= document.getElementById('idUsu').value;
	var	c= document.getElementById('resultadosProyectos');
	ajax = control(); 
	ajax.open("GET","insertar.php?noEnv="+noPy+"&estEnv="+esPy+"&ideEnv="+idUs);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}

function Buscar()
	{
	var	q= document.getElementById('valor').value;
	var	c= document.getElementById('resultados');
	ajax = control(); 
	ajax.open("GET","procesar.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
function Editar(q)
	{
	var	c= document.getElementById('resultados');
	ajax = control(); 
	ajax.open("GET","editar.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}

function GuardarEdicion(q)
	{
	var	co= document.getElementById('idProy').value;
	var	no= document.getElementById('nomProy').value;
	var	cost= document.getElementById('estProy').value;
	var	img= document.getElementById('idUsu').value;	
	var	c= document.getElementById('resultados');
	ajax = control(); 
	ajax.open("GET","guardar.php?id="+co+"&nom="+no+"&costo="+cost+"&imagen="+img);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	function Eliminar(q)
	{
	var	c= document.getElementById('resultados');
	ajax = control(); 
	ajax.open("GET","eliminar.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	function Confirmar(q)
	{
	c=confirm(' ¿Realmente desea eliminar el registro...?');
	if(c)
		{	Eliminar(q);}
	else
		{	return false;}
		}
/*FINALIZA TODO SOBRE PROYECTOS*/



	/*INICIA OPERACIONES SOBRE CLIENTE */
		
	function InsertarUsu()
	{
	var	i= document.getElementById('idUsuario').value;
	var	no= document.getElementById('nomUsu').value;
	var	ap= document.getElementById('apeUsu').value;
	var	ti= document.getElementById('tipUsu').value;	
	var	ge= document.getElementById('genUsu').value;	
	var	ce= document.getElementById('celUsu').value;	
	var	di= document.getElementById('dirUsu').value;	
	var	cor= document.getElementById('corUsu').value;	
	var	con= document.getElementById('conUsu').value;	
	var	c= document.getElementById('resultadosActUsuario');
	ajax = control(); 
	ajax.open("GET","insertarUsua.php?id="+i+"&nom="+no+"&ape="+ap+"&tip="+ti+"&gen="+ge+"&cel="+ce+"&dir="+di+"&cor="+cor+"&cont="+con);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}


	function BuscarUsu()
	{
	var	v= document.getElementById('valorUsu').value;
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","procesarUsu.php?v="+v);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}

	function EditarUsu(q)
	{
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","editarUsu.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}

	function GuardarEdicionUsu(q)
	{
	var	id= document.getElementById('idUsu').value;
	var	no= document.getElementById('nomUsu').value;
	var	ap= document.getElementById('apeUsu').value;
	var	ti= document.getElementById('tipUsu').value;	
	var	ge= document.getElementById('genUsu').value;	
	var	ce= document.getElementById('celUsu').value;	
	var	di= document.getElementById('dirUsu').value;	
	var	cor= document.getElementById('corUsu').value;	
	var	con= document.getElementById('conUsu').value;	
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","guardarUsu.php?ide="+q+"&nom="+no+"&ape="+ap+"&tip="+ti+"&gen="+ge+"&tel="+ce+"&dir="+di+"&corr="+cor+"&cont="+con);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}

function ConfirmarUsu(q)
	{
	c=confirm(' ¿Realmente desea eliminar el registro...?');
	if(c)
		{	EliminarUsu(q);}
	else
		{	return false;}
	}

	function EliminarUsu(q)
	{
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","eliminarUsu.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
/*FINALIZA OPERACIONES SOBRE CLIENTE */


/*INICIA OPERACIONES ACTIVIDADES*/

	function BuscarAct()
	{
	var	v= document.getElementById('valorAct').value;
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","procesarAct.php?v="+v);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	/*ESTA DOS FUNCIONES SON PARA LA PARDE DEL PROGRAMADOR*/
		function BuscarAct2($idProg)
	{
	//	var	v= document.getElementById('valorAct').value;
	//esta funcion envio el id del programador al archivo procesar vista ...que envia el nombre de la tabla y el id de usuario a buscar las activididades
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","ConsultarActividadesProgramador.php?v="+$idProg);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}//despues de hacer la consulta en la clase control me envia el id de la actividad la recibe por q y la vuelve a enviar  al archivo EditarActPro

	/*FUNCION PARA BUSCAR EL ESTADOS DE LAS ACTIVIDADES DEL CLIENTE DE SUS PROYECTOS*/
	function BuscarActClientes($idProg)
	{
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","consultaActividades.php?v="+$idProg);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	/*/////////////////////////////////////////////*/
		function EditarActPro(q)
	{
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","editarActPro.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
		/**/
	
	
		function EditarAct(q)
	{
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","editarAct.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	function GuardarEdicionAct(q)
	{
	var	id= document.getElementById('idAct').value;
	var	no= document.getElementById('nomAct').value;
	var	fi= document.getElementById('fecIniAct').value;
	var	ff= document.getElementById('fecFinAct').value;	
	var	hh= document.getElementById('HHAct').value;	
	var	es= document.getElementById('estAct').value;	
	var	idp= document.getElementById('idPro').value;	
	var	idy= document.getElementById('idProy').value;	
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","guardarAct.php?ide="+q+"&nom="+no+"&fei="+fi+"&fef="+ff+"&hha="+hh+"&est="+es+"&ipro="+idp+"&idprog="+idy);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
		function GuardarEdicionActPro(q)
	{
	var	id= document.getElementById('idAct').value;
	var	no= document.getElementById('nomAct').value;
	var	fi= document.getElementById('fecIniAct').value;
	var	ff= document.getElementById('fecFinAct').value;	
	var	hh= document.getElementById('HHAct').value;	
	var	es= document.getElementById('estAct').value;	
	var	idp= document.getElementById('idPro').value;	
	var	idy= document.getElementById('idProy').value;
	var	img= document.getElementById('imagen').value;	
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","guardarActPro.php?ide="+q+"&nom="+no+"&fei="+fi+"&fef="+ff+"&hha="+hh+"&est="+es+"&ipro="+idp+"&idprog="+idy+"&img="+img);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	function ConfirmarAct(q)
	{
	c=confirm(' ¿Realmente desea eliminar el registro...?');
	if(c)
		{	EliminarAct(q);}
	else
		{	return false;}
	}

	function EliminarAct(q)
	{
	var	c= document.getElementById('resultadosAct');
	ajax = control(); 
	ajax.open("GET","eliminarAct.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	function InsertarAct()
	{
	var	no= document.getElementById('nomAct').value;
	var	fi= document.getElementById('fecIact').value;
	var	ff= document.getElementById('fecFact').value;
	var	hh= document.getElementById('HH').value;	
	var	es= document.getElementById('estAct').value;	
	var	ip= document.getElementById('idPro').value;	
	var	ipg= document.getElementById('idProy').value;	
		
	var	c= document.getElementById('resultadosActError');
	ajax = control(); 
	ajax.open("GET","insertarAct.php?nom="+no+"&feI="+fi+"&feF="+ff+"&ihh="+hh+"&est="+es+"&ipr="+ip+"&ipg="+ipg);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	
	/*GUARDA LAS EDICIIONES O AVANCES DEL PERFIL PROGRAMADOR*/
	function GuardarEdicionActPro(q)
	{
//	var	id= document.getElementById('idAct').value;
	var	no= document.getElementById('nomAct').value;
	var	fi= document.getElementById('fecIniAct').value;
	var	ff= document.getElementById('fecFinAct').value;	
	var	hh= document.getElementById('HHAct').value;	
	var	es= document.getElementById('estAct').value;	
	var	idp= document.getElementById('idPro').value;	
	var	img= document.getElementById('imagen').value;
	var	idy= document.getElementById('idProy').value;	
	var	c= document.getElementById('resultadosAvance');
	ajax = control(); 
	ajax.open("GET","actualizarActPro.php?ide="+q+"&nom="+no+"&fei="+fi+"&fef="+ff+"&hha="+hh+"&est="+es+"&ipro="+idp+"&imagen="+img+"&idproy="+idy);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	/*SUGERENCIAS PARA PERFIL USUARIO*/
	function SugerenciasUsu(q)
	{
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","sugerencias.php?q="+q);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	function sugerencias()
	{

	var	id= document.getElementById('idAct').value;
	var	sug= document.getElementById('sugAct').value;	
	var	c= document.getElementById('resultadosUsu');
	ajax = control(); 
	ajax.open("GET","sugerenciasActulizar.php?idAct="+id+"&sugAct="+sug);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	/*PARA Q EL PROGRAMADOR MIRE LAS SUGERENCIAS*/
	function leerSugPro(s)
	{

	var	c= document.getElementById('sugerencias');
	ajax = control(); 
	ajax.open("GET","leerSugProgramador.php?idAct="+s);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	/*FIN SUGERENCIAS*/
	
	
	
	/*INICIA REPORTES*/
		function reportes()
	{
	var	c= document.getElementById('resultadosRep');
	ajax = control(); 
	ajax.open("GET","reportes.php?rep="+1);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
		function tablas()
	{
	var	c= document.getElementById('jj');
	ajax = control(); 
	ajax.open("GET","tablas.php?rep="+1);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	
	/*FIN DE REPORTES*/
	
	/*PERFIL DE PROGRAMADOS ACTULIZAR DATOS*/
	
	function ActuDatPerPro(q)
	{
	var	id= document.getElementById('idUsu').value;
	var	no= document.getElementById('nomUsu').value;
	var	ap= document.getElementById('apeUsu').value;
	var	ti= document.getElementById('tipUsu').value;	
	var	ge= document.getElementById('genUsu').value;	
	var	ce= document.getElementById('celUsu').value;	
	var	di= document.getElementById('dirUsu').value;	
	var	cor= document.getElementById('corUsu').value;	
	var	con= document.getElementById('conUsu').value;	
	var	c= document.getElementById('conProPer');
	ajax = control(); 
	ajax.open("GET","guardarUsu.php?ide="+q+"&nom="+no+"&ape="+ap+"&tip="+ti+"&gen="+ge+"&tel="+ce+"&dir="+di+"&corr="+cor+"&cont="+con);
	ajax.onreadystatechange = function()
	{	if(ajax.readyState == 4)
		{
			c.innerHTML=ajax.responseText;
		}
	}
	ajax.send(null)	
	}
	
	/*PERFIL DE PROGRAMADOR*/
	
	
	
	
/*FINALIZA ACTIVIDADES*/

