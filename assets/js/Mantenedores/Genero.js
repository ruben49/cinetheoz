cargarLista();

$("#abreNuevoGenero").on("click", function() {
	$('#crearGenero').modal({
		backdrop : 'static',
		keyboard : false,
		show : true
	});
});

$("#termina").on("click", function() {
	$('#crearGenero').modal('hide');
	location.reload();
});

 $("#btnCreaGenero").on("click", function() {
 	var descripcion = $('#descripcion').val();

	if (descripcion === "") {
		alerta("INFORMACI&Oacute;N", "Debe ingresar la descripci&oacute;n del g&eacute;nero");
	} else {

		var postData = {
			descripcion : descripcion
		};

		var formURL = "/cinetheoz/GeneroController/guardar";
		$('#crearSucursal').modal('hide');
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success : function(data) {
				
				if (data === "1") {
					$("#termina").css("display", "");
					$("#cerrarAlerta").css("display", "none");

					alerta("INFORMACI&Oacute;N", "G&eacute;nero creado con &eacute;xito");

					$("#termina").focus();
				} else {

					alerta("ERROR", "Error al intentar crear el g&eacute;nero");
				}

			},
			error : function(e) {

				alerta("ERROR", "Error al intentar crear el g&eacute;nero : " + e.status);
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
     
    var formURL = "/cinetheoz/GeneroController/obtenerGeneros";

    $.ajax({
            url : formURL,
            type : "POST",
            success : function(data) {
                     
                    if (data !== "") {

                        $('#listaGeneros').dataTable({
                            data: JSON.parse(data),
                            columns: [
                                     { title: "ID" },
                                     { title: "G&Eacute;NERO" },
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

                            alerta("ERROR", "Error al cargar los g&eacute;neros");
                    }

            },
            error : function(e) {

                    alerta("ERROR", "Error al intentar cargar los g&eacute;neros de pel&iacute;cula: " + e.status);
            }
    });
    
}