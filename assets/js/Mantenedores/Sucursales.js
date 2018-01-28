cargarLista();

$("#abreNuevaSucursal").on("click", function() {
	$('#crearSucursal').modal({
		backdrop : 'static',
		keyboard : false,
		show : true
	});
});

$("#termina").on("click", function() {
	$('#crearSucursal').modal('hide');
	location.reload();
});

 $("#btnCreaSucursal").on("click", function() {
 	var descripcion = $('#descripcion').val();

	if (descripcion === "") {
		alerta("INFORMACI&Oacute;N", "Debe ingresar la descripci&oacute;n de la sucursal");
	} else {

		var postData = {
			descripcion : descripcion
		};

		var formURL = "/cinetheoz/SucursalesController/guardar";
		$('#crearSucursal').modal('hide');
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success : function(data) {
				
				if (data === "1") {
					$("#termina").css("display", "");
					$("#cerrarAlerta").css("display", "none");

					alerta("INFORMACI&Oacute;N", "Sucursal creada con &eacute;xito");

					$("#termina").focus();
				} else {

					alerta("ERROR", "Error al intentar crear la sucursal");
				}

			},
			error : function(e) {

				alerta("ERROR", "Error al intentar crear la sucursal : " + e.status);
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
     
    var formURL = "/cinetheoz/SucursalesController/obtenerSucursales";

    $.ajax({
            url : formURL,
            type : "POST",
            success : function(data) {
                    console.log(data);
                    if (data != "") {

                        $('#listaSucursales').dataTable({
                            data: JSON.parse(data),
                            columns: [
                                     { title: "ID" },
                                     { title: "PRODUCTORA" },
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

                            alerta("ERROR", "Error al cargar las sucursales");
                    }

            },
            error : function(e) {

                    alerta("ERROR", "Error al intentar cargar las sucursales: " + e.status);
            }
    });
    
}