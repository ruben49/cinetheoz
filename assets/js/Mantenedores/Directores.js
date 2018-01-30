cargarLista();

$("#abreNuevaDistribuidora").on("click", function() {
	$('#crearDirector').modal({
		backdrop : 'static',
		keyboard : false,
		show : true
	});
});

$("#termina").on("click", function() {
	$('#crearDirector').modal('hide');
	location.reload();
});

 $("#btnCreaDirector").on("click", function() {
 	var nombreDirector = $('#nombreDirector').val();

	if (nombreDirector === "") {
		alerta("INFORMACI&Oacute;N", "Debe ingresar el nombre del director");
	} else {

		var postData = {
			nombreDirector : nombreDirector
		};

		var formURL = "/cinetheoz/DirectoresController/guardar";
		$('#crearDirector').modal('hide');
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success : function(data) {
				
				if (data === "1") {
					$("#termina").css("display", "");
					$("#cerrarAlerta").css("display", "none");

					alerta("INFORMACI&Oacute;N", "Director creado con &eacute;xito");

					$("#termina").focus();
				} else {

					alerta("ERROR", "Error al intentar crear el director");
				}

			},
			error : function(e) {

				alerta("ERROR", "Error al intentar  crear el director : " + e.status);
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
     
    var formURL = "/cinetheoz/DirectoresController/obtenerDirectores";

    $.ajax({
            url : formURL,
            type : "POST",
            success : function(data) {
                     
                    if (data !== "") {

                        $('#listaDirectores').dataTable({
                            data: JSON.parse(data),
                            columns: [
                                     { title: "ID" },
                                     { title: "DIRECTORES" },
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

                            alerta("ERROR", "Error al cargar las distribuidoras");
                    }

            },
            error : function(e) {

                    alerta("ERROR", "Error al intentar cargar los directores: " + e.status);
            }
    });
    
}