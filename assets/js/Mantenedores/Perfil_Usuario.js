
cargarLista();

$("#abreNuevoPerfil").on("click", function() {
	$('#crearPerfil').modal({
		backdrop : 'static',
		keyboard : false,
		show : true
	});
});

$("#termina").on("click", function() {
	$('#crearPerfil').modal('hide');
	location.reload();
});

 $("#btnCreaPerfil").on("click", function() {
 	var descripcion = $('#descripcion').val();

	if (descripcion === "") {
		alerta("INFORMACI&Oacute;N", "Debe ingresar la descripci&oacute;n del Perfil");
	} else {

		var postData = {
			descripcion : descripcion
		};

		var formURL = "/cinetheoz/Perfil_UsuarioController/guardar";
		$('#crearPerfil').modal('hide');
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success : function(data) {
				
				if (data === "1") {
					$("#termina").css("display", "");
					$("#cerrarAlerta").css("display", "none");

					alerta("INFORMACI&Oacute;N", "Perfil creado con &eacute;xito");

					$("#termina").focus();
				} else {

					alerta("ERROR", "Error al intentar crear el Perfil");
				}

			},
			error : function(e) {

				alerta("ERROR", "Error al intentar crear el Perfil : " + e.status);
			}
		});
	}
	return false;
});



function alerta(titulo, contenido) {

	$('#tituloAlerta').html(titulo);
	$('#contenidoMensaje').html(contenido);
	$('#alerta').modal({
		backdrop : 'static',
		keyboard : false,
		show : true,
		focus : true
	});
	$("#cerrarAlerta").focus();

}

function cargarLista(){
     
    var formURL = "/cinetheoz/Perfil_UsuarioController/obtenerPerfiles";

    $.ajax({
            url : formURL,
            type : "POST",
            success : function(data) {
                    console.log(data);
                    if (data != "") {

                        $('#listaPerfiles').dataTable({
                            data: JSON.parse(data),
                            columns: [
                                     { title: "ID" },
                                     { title: "PERFILES DE USUARIO" },
                                     { title: "OPCIONES" }

                                 ],	 
                        language: {
                            "sProcessing":    "Procesando...",
                            "sLengthMenu":    "Mostrar _MENU_ Registros",
                            "sZeroRecords":   "No se encontraron resultados",
                            "sEmptyTable":    "Ningún dato disponible en esta tabla",
                            "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                            "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
                            "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
                            "sInfoPostFix":   "",
                            "sSearch":        "Buscar: ",
                            "sUrl":           "",
                            "sInfoThousands":  ",",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst":    "Primero",
                                "sLast":    "Último",
                                "sNext":    "Siguiente",
                                "sPrevious": "Anterior"
                            },
                            oAria: {
                                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                            },

                            order: [[ 3, "desc" ]]
                        }

                        });
                    } else {

                            alerta("ERROR", "Error al cargar los perfiles");
                    }

            },
            error : function(e) {

                    alerta("ERROR", "Error al intentar cargar los perfiles de usuario: " + e.status);
            }
    });
    
}