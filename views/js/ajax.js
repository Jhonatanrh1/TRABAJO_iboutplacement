$(document).ready(function () {
  $("form.ajaxpersona").submit(function (e) {
    e.preventDefault();
    var $form = $(this);
    $form.find('[type="submit"]').prop("disabled", true);
    $.ajax({
      url: "controller/MailPersona.php",
      type: "post",
      data: $form.serialize(),
      beforeSend: function () {
        $("#spinnerPersona").show();
      },
    }).done(function (data) {
      $date = data;
      if ($date == "exito") {
        $("#spinnerPersona").hide();
        swal.fire("Mensaje enviado", "Enviado", "success");
        $("form.ajaxpersona")[0].reset();
        $("#Contactopersona").removeAttr("disabled");
      } else {
        $("#spinnerPersona").hide();
        swal.fire("Error de Envio", "Vuelva intentarlo mas tarde", "error");
      }
      $("#Contactopersona").removeAttr("disabled");
    });
  });
});

$(document).ready(function () {
  $("form.ajaxempresa").submit(function (e) {
    e.preventDefault();
    var $form = $(this);
    $form.find('[type="submit"]').prop("disabled", true);
    $.ajax({
      url: "controller/MailEmpresa.php",
      type: "post",
      data: $form.serialize(),
      beforeSend: function () {
        $("#spinnerEmpresa").show();
      },
    }).done(function (data) {
      $date = data;
      if ($date == "exito") {
        $("#spinnerEmpresa").hide();
        swal.fire("Mensaje enviado", "Enviado", "success");
        $("form.ajaxempresa")[0].reset();
        $("#contactoempresa").removeAttr("disabled");
      } else {
        $("#spinnerEmpresa").hide();
        swal.fire("Error de Envio", "Vuelva intentarlo mas tarde", "error");
      }
      $("#contactoempresa").removeAttr("disabled");
    });
  });
});

$(document).ready(function () {
  $(".ContactoFormulario").on("click", function (evt) {
    evt.preventDefault();
    var form = document.getElementById("ajaxFormulario");
    var formData = new FormData(form);
    var ruta = "controller/MailFormularioTaller.php";
    $.ajax({
      url: ruta,
      type: "POST",
      data: formData,
      contentType: false,
      processData: false,
      beforeSend: function () {
        $("#spinnerTaller").show();
      },
    }).done(function (data) {
      $date = data;
      console.log($date);
      if ($date == "exito") {
        $("#spinnerTaller").hide();
        swal.fire("Mensaje enviado", "Enviado", "success");
        $("form.ajaxFormulario")[0].reset();
        $("#ContactoFormulario").removeAttr("disabled");
      } else {
        $("#spinnerTaller").hide();
        swal.fire(
          "Error de Envio",
          "Vuelva intentarlo mas tarde/Asegurece que los campos esten llenos",
          "error"
        );
      }
      $("#ContactoFormulario").removeAttr("disabled");
    });
  });
});

