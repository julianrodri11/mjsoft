// JavaScript Document

$(document).ready(function() {
$('#tituloProyectos').click(function() {
$('#conPro').slideToggle(1000);
$('#menIngProy').slideToggle(1000);
});

$('#conPro').click(function() {
$('#zzz').slideToggle(1000);
$('#zzz2').slideUp(500);
});
$('#menIngProy').click(function() {
$('#zzz2').slideToggle(1000);
$('#zzz').slideUp(500);
});
$('#titulo2').click(function() {
$('#zzz2').slideToggle(1000);
});


/*finañliza efectos proyectos*/

/*inicia efectos programadores*/

$('#titulo3').click(function() {
$('#conPro2').slideToggle(1000);
$('#menIngProy2').slideToggle(1000);
});



$('#conPro2').click(function() {
$('#zzz3').slideToggle(1000);
$('#zzz4').slideUp(500);
});


$('#menIngProy2').click(function() {
$('#zzz4').slideToggle(1000);
$('#zzz3').slideUp(500);
});



$('#titulo2').click(function() {
$('#zzz4').slideToggle(1000);
});

/*finañliza efectos programadores*/



$('#titulo4').click(function() {/*cuando de click en el menu clientes se desplique las dos opc buscar e ingresar */
$('#conPro3').slideToggle(1000);
$('#menIngProy3').slideToggle(1000);
});

$('#conPro3').click(function() {/*cuando click se despliegue el buscar y el cont resultados*/
$('#zzz5').slideToggle(1000);
$('#zzz6').slideUp(1000);
});

$('#menIngProy3').click(function()/*cuando haga click en el menu ingresar se despliegue ingresar y se cierre el cont buscar*/
{$('#zzz6').slideToggle(1000);
$('#zzz5').slideUp(500); 
});
/*//////////////////////////////////*/

$('#titulo5').click(function() {/*cuando de click en el menu clientes se desplique las dos opc buscar e ingresar */
$('#conPro4').slideToggle(1000);
$('#menIngProy4').slideToggle(1000);
});

$('#conPro4').click(function() {/*cuando click se despliegue el buscar y el cont resultados*/
$('#zzz7').slideToggle(1000);
$('#resultados').slideToggle(1000);
$('#zzz8').slideUp(1000);
});

$('#menIngProy4').click(function()/*cuando haga click en el menu ingresar se despliegue ingresar y se cierre el cont buscar*/
{$('#zzz8').slideToggle(1000);
$('#zzz7').slideUp(500); 
});

/* EFECTO PARA REPORTES*/
$('#kk').click(function() {/*cuando de click en el menu clientes se desplique las dos opc buscar e ingresar */
$('#xx').slideToggle(1000);
$('#uu').slideToggle(1000);
});

$('#xx').click(function() {/*cuando click se despliegue el buscar y el cont resultados*/
$('#yy').slideToggle(1000);
/*$('#resultadosRep').slideToggle(1000);*/
/*$('#jj').slideUp(1000);*/
});

$('#uu').click(function()/*cuando haga click en el menu ingresar se despliegue ingresar y se cierre el cont buscar*/
{$('#jj').slideToggle(1000);
$('#yy').slideUp(500); 
});

/*PERFIL PROGRAMADOR*/

$('#tituloPro').click(function()/*CUANDO DE CLICL EN TITULOPRO*/
{$('#conProPer').slideToggle(1000);
/*$('#yy').slideUp(500); */
});

});

