 $("#abreNuevaProductora").on("click", function() {
	$('#crearProductora').modal({
		backdrop : 'static',
		keyboard : false,
		show : true
	});
});

$("#termina").on("click", function() {
	$('#crearProductora').modal('hide');
	location.reload();
});


 $("#btnCreaProductora").on("click", function() {
 	var descripcion = $('#descripcion').val();

	if (descripcion === "") {
		alerta("INFORMACI&Oacute;N", "Debe ingresar la descripci&oacute;n de la ubicaci&oacute;n");
	} else {

		var postData = {
			descripcion : descripcion
		};

		var formURL = "/cinetheoz/ProductorasController/guardar";
		$('#crearProductora').modal('hide');
		$.ajax({
			url : formURL,
			type : "POST",
			data : postData,
			success : function(data) {
				
				if (data === "1") {
					$("#termina").css("display", "");
					$("#cerrarAlerta").css("display", "none");

					alerta("INFORMACI&Oacute;N", "Productora creada con &eacute;xito");

					$("#termina").focus();
				} else {

					alerta("ERROR", "Error al intentar crear la productora");
				}

			},
			error : function(e) {

				alerta("ERROR", "Error al intentar crear la productora : " + e.status);
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