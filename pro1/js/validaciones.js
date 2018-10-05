   $(function(){
        $('#formProy').validate({
            rules :{               
                nomProy : {
                    required : true,
                    minlength : 5,
                    maxlength : 39
                }
            },
            messages : {                
                nomProy : {
                    required : "Debe ingresar un nombre",
                    minlength : "EL nombre debe tener un minimo de 5 caracteres",
                    maxlength : "EL nombre debe tener un maximo de 40 caracteres"
                }
            }
        });    /*FORMULARIO DE PROYECTOS*/
		
			/*PARA INGRESAR USUARIO*/
		
		    $('#formUsuarios').validate({
            rules: {
					idUsuario: { number:true,required: true, minlength: 2},
					nomUsu: { required: true, maxlength: 40},
					apeUsu: { required: true, maxlength: 40},
					celUsu: { number:true,minlength: 2, maxlength: 10},
					corUsu: { required:true, email: true,maxlength: 50},
					conUsu: { required:true, minlength: 5,maxlength: 15}
			},
           messages: {
					idUsuario: "Obligatorio y Entero",
					nomUsu: "El campo es obligatorio.",
					apeUsu: "Complete Maximo 40 caracteres",					
					celUsu : "Debe ser entero max 10 ",
					corUsu : "Correo Incorrecto max 50",
					conUsu : "Contrasena Min 5 Max 15"

					}					
		        });    	
				
				
							/*PARA ACTULIZAR USUARIO PERFIL PROGRAMADOR*/
		
		    $('#formProgPerfil').validate({
            rules: {					
					idUsu: { required: true, maxlength: 40},
					nomUsu: { required: true, maxlength: 40},
					apeUsu: { required: true, maxlength: 40},					
					celUsu: { required: true,number:true,minlength: 2, maxlength: 10},
					dirUsu: { maxlength: 30},
					corUsu: { required:true, email: true,maxlength: 30},
					conUsu: { required:true, minlength: 5,maxlength: 15}
			},
           messages: {
					idUsu: "entero ",
					nomUsu: "Complete, Maximo 40 caracteres",
					apeUsu: "Complete, Maximo 40 caracteres",					
					celUsu : "Debe ser entero max 10 ",
					dirUsu : "Maximo 30 ",
					corUsu : "Correo Incorrecto max 50",
					conUsu : "Contrasena Min 5 Max 15"

					}					
		        });    	
				
				/*ACTUALIZAR PERFIL CLIENTE*/
				
			$('#formCliePerfil').validate({
            rules: {					
					idUsu: { required: true, maxlength: 40},
					nomUsu: { required: true, maxlength: 40},
					apeUsu: { required: true, maxlength: 40},					
					celUsu: { required: true,number:true,minlength: 2, maxlength: 10},
					dirUsu: { maxlength: 30},
					corUsu: { required:true, email: true,maxlength: 30},
					conUsu: { required:true, minlength: 5,maxlength: 15}
			},
           messages: {
					idUsu: "entero ",
					nomUsu: "Complete, Maximo 40 caracteres",
					apeUsu: "Complete, Maximo 40 caracteres",					
					celUsu : "Debe ser entero max 10 ",
					dirUsu : "Maximo 30 ",
					corUsu : "Correo Incorrecto max 50",
					conUsu : "Contrasena Min 5 Max 15"

					}					
		        });    	
				
				/*FORMULARIO ACTIVIDADES*/
				    $('#ingresarAct').validate({
            rules: {
					nomAct: { required: true, minlength: 2},					
	     		   },
           messages: {
					nomAct: "El campo es obligatorio.",					
					}					
		        });    	
		
		
    });