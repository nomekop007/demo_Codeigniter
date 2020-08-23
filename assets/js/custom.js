$(document).ready(function () {
	var base_url = "http://localhost/demo_CI/";

	//metodo login usuario
	$("#bt_login").click((e) => {
		e.preventDefault();

		var rut = $("#rut_login").val();
		var clave = $("#clave_login").val();

		//envio de datos
		$.ajax({
			url: base_url + "login",
			type: "post",
			dataType: "json",
			data: { rut: rut, clave: clave },
			success: (s) => {
				if (s.msg === "404") {
					Materialize.toast("usuario no encontrado", "4000");
				} else {
					window.location.href = base_url + s.msg;
				}
			},
			error: () => {
				Materialize.toast("error 500", "4000");
			},
		});
	});

	//metodo registrar usuario
	$("#bt_registrar").click((e) => {
		e.preventDefault();

		//se captura formulario ya que se cactura un archivo (foto)
		var form = $("#form_registrar")[0];
		var data = new FormData(form);

		//el ajax requiere mas datos para envio de formulario
		$.ajax({
			url: base_url + "crear",
			type: "post",
			dataType: "json",
			data: data,
			enctype: "multipart/form-data",
			processData: false,
			contentType: false,
			cache: false,
			timeOut: false,
			success: (e) => {
				Materialize.toast(e.msg, "3000");
			},
			error: () => {
				Materialize.toast("error 500", "3000");
			},
		});
	});
});
