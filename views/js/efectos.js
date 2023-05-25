$(document).ready(function () {
  var iCnt = 0;

  // Crear un elemento div añadiendo estilos CSS
  var container = $(document.createElement("div")).css({
    padding: "5px",
    margin: "20px",
    width: "170px",
    border: "1px dashed",
    borderTopColor: "#999",
    borderBottomColor: "#999",
    borderLeftColor: "#999",
    borderRightColor: "#999",
  });

  $("#btAdd").click(function () {
    if (iCnt <= 19) {
      iCnt = iCnt + 1;

      // Añadir caja de texto.
      $(container).append(
        '<input type=text class="input" id=tb' +
          iCnt +
          " " +
          'value="Elemento de Texto ' +
          iCnt +
          '" />'
      );

      if (iCnt == 1) {
        var divSubmit = $(document.createElement("div"));
        $(divSubmit).append(
          '<input type=button class="bt" onclick="GetTextValue()"' +
            "id=btSubmit value=Enviar />"
        );
      }

      $("#main").after(container, divSubmit);
    } else {
      //se establece un limite para añadir elementos, 20 es el limite

      $(container).append("<label>Limite Alcanzado</label>");
      $("#btAdd").attr("class", "bt-disable");
      $("#btAdd").attr("disabled", "disabled");
    }
  });

  $("#btRemove").click(function () {
    // Elimina un elemento por click
    if (iCnt != 0) {
      $("#tb" + iCnt).remove();
      iCnt = iCnt - 1;
    }

    if (iCnt == 0) {
      $(container).empty();

      $(container).remove();
      $("#btSubmit").remove();
      $("#btAdd").removeAttr("disabled");
      $("#btAdd").attr("class", "bt");
    }
  });

  $("#btRemoveAll").click(function () {
    // Elimina todos los elementos del contenedor

    $(container).empty();
    $(container).remove();
    $("#btSubmit").remove();
    iCnt = 0;
    $("#btAdd").removeAttr("disabled");
    $("#btAdd").attr("class", "bt");
  });

  //fin
  var contador = 0;
  // Crear un elemento div añadiendo estilos CSS
  var container = $(document.createElement("div"))
    .css({
      margin: "10px",
    })
    .addClass("row");

  $("#btnagregar").click(function () {
    if (contador <= 19) {
      contador++;

      // Añadir caja de texto.
      $(container).append(
        '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">' +
          '<input type="text" class="form-control fc_sty" name="nombres' +
          contador +
          '"' +
          'placeholder="NOMBRES" id=nombre' +
          contador +
          " " +
          '" required ></div>' +
          '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">' +
          '<input type="text" class="form-control fc_sty" name="cargo' +
          contador +
          '"' +
          'placeholder="CARGO" id=cargo' +
          contador +
          " " +
          '" required ></div>' +
          '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">' +
          '<input type="text" class="form-control fc_sty" name="celular' +
          contador +
          '"' +
          'placeholder="CELULAR" id=celular' +
          contador +
          " " +
          '" required ></div>' +
          '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">' +
          '<input type="text" class="form-control fc_sty" name="dni' +
          contador +
          '"' +
          'placeholder="DNI" id=dni' +
          contador +
          " " +
          '" required ></div>' +
          '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  mb-4 ">' +
          '<input type="email" class="form-control fc_sty" name="email' +
          contador +
          '"' +
          'placeholder="EMAIL" id=email' +
          contador +
          " " +
          '" required ><br><hr></div>'
      );
      $("#form-content").after(container);
    } else {
      //se establece un limite para añadir elementos, 20 es el limite

      $(container).append("<label>Limite Alcanzado</label>");
      $("#btnagregar").attr("class", "bt-disable");
      $("#btnagregar").attr("disabled", "disabled");
    }
  });
});

//Fin Formulario Taller ************************

//Inicio PreguntasFrecuentes
$(function () {
  $(".accordion-titulo").click(function (e) {
    e.preventDefault();

    var contenido = $(this).next(".accordion-content");

    if (contenido.css("display") == "none") {
      //open
      contenido.slideDown(500);
      $(this).addClass("open");
    } else {
      //close
      contenido.slideUp(500);
      $(this).removeClass("open");
    }
  });
});

//Fin PreguntasFrecuentes

// Inicio Servicios ***************************
const Onper = document.querySelector("#btn-persona");
const Onemp = document.querySelector("#btn-empresa");
const clase = document.querySelector("#div-modulo_1");
const clase2 = document.querySelector("#div-modulo_2");

Onemp.addEventListener("click", function () {
  if ((clase2.style.display = "none")) {
    clase2.style.display = "block";
    clase2.style.display = "flex";
    clase.style.display = "none";
    Onper.style.background = "";
    Onemp.style.background = "white";
    Onemp.style.color = "black";
    Onper.style.color = "";
  } else {
    clase2.style.display = "none";
  }
});
Onper.addEventListener("click", function () {
  if ((clase.style.display = "none")) {
    clase.style.display = "block";
    clase.style.display = "flex";
    clase2.style.display = "none";
    Onper.style.background = "white";
    Onemp.style.background = "";
    Onemp.style.color = "";
    Onper.style.color = "black";
  } else {
    clase.style.display = "none";
  }
});
//Fin Servicios *******************************

/*Inicio Contactos Personas y Empresa*/
const btnContactoPersona = document.querySelector("#btn-Contactopersona");
const btnContactoEmpresa = document.querySelector("#btn-Contactoempresa");
const ContactoPersona = document.querySelector("#div_contactoPersona");
const ContactoEmpresa = document.querySelector("#div_contactoEmpresa");
ContactoEmpresa.style.display = "none";
btnContactoEmpresa.addEventListener("click", function () {
  if ((ContactoEmpresa.style.display = "none")) {
    ContactoEmpresa.style.display = "block";
    ContactoEmpresa.style.display = "flex";
    ContactoPersona.style.display = "none";
  } else {
    ContactoEmpresa.style.display = "none";
  }
});
btnContactoPersona.addEventListener("click", function () {
  if ((ContactoPersona.style.display = "none")) {
    ContactoPersona.style.display = "block";
    ContactoPersona.style.display = "flex";
    ContactoEmpresa.style.display = "none";
  } else {
    ContactoPersona.style.display = "none";
  }
});

/*Fin Contactos Personas y Empresa*/


















new Glider(document.querySelector(".carousel__lista_paises"), {
  // Mobile-first defaults
  slidesToShow: 1,
  slidesToScroll: 1,
  scrollLock: true,
  draggable: true,
  dots: ".carousel__indicadores",
  arrows: {
    prev: ".carousel__anterior",
    next: ".carousel__siguiente",
  },
  responsive: [
    {
      breakpoint: 280,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 1,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 1,
      },
    },
    {
      breakpoint: 463,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 2,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 1,
      },
    },
    {
      // screens greater than >= 775px
      breakpoint: 768,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 4,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 1,
      },
    },
    {
      breakpoint: 1041,
      settings: {
        slidesToShow: 7,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25,
      },
    },
    {
      breakpoint: 1342,
      settings: {
        slidesToShow: 9,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25,
      },
    },
  ],
});

/*inicio Carrusel Blog*/
new Glider(document.querySelector(".carousel__lista_blog"), {
  // Mobile-first defaults
  slidesToShow: 1,
  slidesToScroll: 1,
  scrollLock: true,
  draggable: true,
  dots: ".carousel__indicadores_blog",
  arrows: {
    prev: ".carousel__anterior_blog",
    next: ".carousel__siguiente_blog",
  },
  responsive: [
    {
      breakpoint: 280,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 1,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25,
      },
    },
    {
      breakpoint: 463,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 1,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25,
      },
    },
    {
      // screens greater than >= 775px
      breakpoint: 768,
      settings: {
        // Set to `auto` and provide item width to adjust to viewport
        slidesToShow: 2,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25,
      },
    },
    {
      // screens greater than >= 1024px
      breakpoint: 992,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        itemWidth: 150,
        duration: 0.25,
      },
    },
  ],
});

$(document).ready(function () {
  $("#servicios__menu").click(function (e) {
    $(".navbar-toggler").addClass("collapsed");
    $(".navbar-toggler").attr("aria-expanded", "false");
    $("#navbarTogglerDemo02").removeClass();
    $("#navbarTogglerDemo02").addClass(
      "navbar-collapse d-lg-flex justify-content-end collapse"
    );
  });
  $("#contacto__memu").click(function (e) {
    $(".navbar-toggler").addClass("collapsed");
    $(".navbar-toggler").attr("aria-expanded", "false");
    $("#navbarTogglerDemo02").removeClass();
    $("#navbarTogglerDemo02").addClass(
      "navbar-collapse d-lg-flex justify-content-end collapse"
    );
  });
});

/*RETIRAR LOS ID Y ESTE EFECTO SI SE CONFIRMA QUE IBJOBCOACH ES FUNCIONAL */
$("#IBJOBCOACH").click(function () {
  swal.fire("UPS..!", "Por el momento no se puede ingresar aqui...", "info");
});

$("#IBJOBCOACH2").click(function () {
  swal.fire("UPS..!", "Por el momento no se puede ingresar aqui...", "info");
});

$(document).on("click", "#modal_encontrar_trabajo", function () {
  window.open("pdf-programa", "_blank");
  $("#myModalOutplacementPersona").modal("hide");
  
});
$(document).on("click", "#btn_outplacementPersonas", function () {
  window.open(
    "https://iboutplacement.com/inicio#Contactos"
  );
  
  $("#myModalOutplacementPersona").modal("hide");
});









function btn_eeuu() {
   var element = document.getElementById("fase2");

   element.classList.remove("ocultar-fase");


   var elemente = document.getElementById("fase1");
   elemente.classList.add("ocultar-fase");
}


function btn_espanol() {

   var element = document.getElementById("fase1");

   element.classList.remove("ocultar-fase");


   var elemente = document.getElementById("fase2");
   elemente.classList.add("ocultar-fase");
}


  
