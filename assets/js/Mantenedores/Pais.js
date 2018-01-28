
cargarLista();

$("#abreNuevoPais").on("click", function() {
	$('#crearPais').modal({
		backdrop : 'static',
		keyboard : false,
		show : true
	});
});

$("#termina").on("click", function() {
	$('#crearPais').modal('hide');
	location.reload();
});

 $("#btnCreaPais").on("click", function() {
 	var descripcion = $('#descripcion').val();

	if (descripcion === "") {
		alerta("INFORMACI&Oacute;N", "Debe ingresar la descripci&oacute;n del Pa&iacute;s");
	} else {

		var postData = {
			descripcion : descripcion
		};

		var formURL = "/cinetheoz/PaisController/guardar";
		$('#crearPais').modal('hide');
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success : function(data) {
				
				if (data === "1") {
					$("#termina").css("display", "");
					$("#cerrarAlerta").css("display", "none");

					alerta("INFORMACI&Oacute;N", "Pa&iacute;s creado con &eacute;xito");

					$("#termina").focus();
				} else {

					alerta("ERROR", "Error al intentar crear el Pa&iacute;s");
				}

			},
			error : function(e) {

				alerta("ERROR", "Error al intentar crear el Pa&iacute;s : " + e.status);
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
     
    var formURL = "/cinetheoz/PaisController/obtenerPaises";

    $.ajax({
            url : formURL,
            type : "POST",
            success : function(data) {
                    console.log(data);
                    if (data != "") {

                        $('#listaPaises').dataTable({
                            data: JSON.parse(data),
                            columns: [
                                     { title: "ID" },
                                     { title: "PAISES" },
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

                            alerta("ERROR", "Error al cargar los paises");
                    }

            },
            error : function(e) {

                    alerta("ERROR", "Error al intentar cargar los paises: " + e.status);
            }
    });
    
}