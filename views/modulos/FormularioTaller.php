<div class="container mt-2" id="detalle_col">
    <div class="card text-center col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="card-header " style="background-color: #013f62;">
            <h3 class="text-white">Registro</h3>
        </div>
        <div class="card-body carta-col">
            <div class="" id="div-principal">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-4 detalle1 text-left">
                    <div class="card">
                        <div class="card-body">
                            <b>Señores</b>
                            <br>
                            IB GROUP SAC
                            <br>
                            Av. Circunvalación Golf Los Incas Nro. 208, Torre 3,  Oficina 602B , Santiago de Surco.
                            <br>
                            Tel.: (+01) 748 5112
                            <br>
                            Cel: 983 481 303
                            <br>
                            Correo Electrónico: cm.outplacement.coaching@corporacionibgroup.pe
                            <br>
                            <b>Presente</b>
                            <br>
                            Le agradeceremos se sirvan inscribir a las siguientes personas de mi empresa:
                        </div>
                    </div>
                </div>
                <form action="controller/MailFormularioTaller.php" class="ajaxFormulario" id="ajaxFormulario"
                    method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="form-group mt-4 mb-2 col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <label for="numero" class="sr-only">Numero</label>
                            <input type="number" class="form-control" id="numero" name="numeropersonas" max="20" min='1'
                                placeholder="NUMERO DE PERSONAS" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-4 mb-4" id="select_Taller">
                            <select class="form-control" id="nivel_personal_servicio" name="nivel_personal_servicio"
                                required>
                                <option selected disabled value="">SELECCIONAR UN TALLER</option>
                                <option>HERRAMIENTAS IMPACTANTES CURRÍCULUM + CARTA DE PRESENTACIÓN EXITOSOS</option>
                                <option>DESARROLLA UNA RED DE CONTACTOS PODEROSA</option>
                                <option>Otros</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="form1 row" style="margin-left: 1px;margin-right: 1px;" id="form-content">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">
                            <input type="text" class="form-control fc_sty" id="nombres" name="nombres"
                                placeholder="NOMBRES" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">
                            <input type="text" class="form-control fc_sty" id="cargo" name="cargo" placeholder="CARGO"
                                required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">
                            <input type="text" class="form-control fc_sty" id="celular" name="celular"
                                placeholder="CELULAR" required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">
                            <input type="text" class="form-control fc_sty" id="dni" name="dni" placeholder="DNI"
                                required>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  mb-4 ">
                            <input type="email" class="form-control fc_sty" id="email" name="email" placeholder="EMAIL"
                                required>
                            <br>
                            <hr>
                        </div>
                    </div>

                    <input type="button" onclick="" id="btnagregar" class="btn btn_info mb-2" value="Agregar" />

                   <!-- <a id="fro" onclick="copyForm()" class="btn btn_info mb-4" style="float: left;"><i
                            class="fa fa-plus mr-2" aria-hidden="true"></i>Agregar</a>-->

                    <div class="card mb-4 mt-4 row"
                        style="display: flex; align-items: center; justify-content: center; width: 100%;margin-left: 1px;">
                        <div class="card-header font-weight-bold  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h5>El pago correspondiente se efectuará:</h5>
                        </div>
                        <div class="form-check text-left  col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="radioPago"
                                            id="radioPago1" value="En la oficina de IB Corp
                                            Sac con RUC 20601399882 (Corporación Ibgroup)(Av. Circunvalación Golf Los Incas Nro. 208, Torre 3,  Oficina 602B , Santiago de Surco)" checked>
                                        <label class="custom-control-label" for="radioPago1">En la oficina de IB Corp
                                            Sac con RUC 20601399882 (Corporación Ibgroup)(Av. Circunvalación Golf Los Incas Nro. 208, Torre 3,  Oficina 602B , Santiago de Surco) </label>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="radioPago"
                                            id="radioPago2" value="Mediante el depósito en el
                                            Banco">
                                        <label class="custom-control-label" for="radioPago2">Mediante el depósito en el
                                            Banco</label>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="radioPago"
                                            id="radioPago3" value="Banco de BBVA Cta Cte en
                                            Soles: 0011-0157-59-0100045456">
                                        <label class="custom-control-label" for="radioPago3"> Banco de BBVA Cta Cte en
                                            Soles: 0011-0157-59-0100045456</label>
                                        <p class="text-left">Nro. Cod. InterBancario: 011 157 000100045456 59.</p>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <b>Añadir Voucher:</b> &nbsp; &nbsp;
                                    <input type="file" name="imgForm" id="imgForm" class="btn btn_info"
                                        style="width: 240px;" accept="image/x-png,image/gif,image/jpeg">
                                    <i class="fa fa-upload"></i>
                                    </input>
                                    <br>
                                    <p>Adjuntamos la información necesaria para la emisión de la factura</p>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">

                            <input type="text" class="form-control fc_sty" id="nombresEmpresa" name="nombresEmpresa"
                                placeholder="EMPRESA" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4 ">

                            <input type="text" class="form-control fc_sty" id="rucEmpresa" name="rucEmpresa"
                                placeholder="RUC" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-4 ">

                            <input type="text" class="form-control fc_sty" id="direccionEmpresa" name="direccionEmpresa"
                                placeholder="DIRECCION" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">

                            <input type="text" class="form-control fc_sty" id="distritoEmpresa" name="distritoEmpresa"
                                placeholder="DISTRITO" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">

                            <input type="text" class="form-control fc_sty" id="telefonoEmpresa" name="telefonoEmpresa"
                                placeholder="TELEFONO" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  mb-4">

                            <input type="text" class="form-control fc_sty" id="faxEmpresa" name="faxEmpresa"
                                placeholder="FAX" required>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12  mb-4 ">

                            <input type="email" class="form-control fc_sty" id="emailEmpresa" name="emailEmpresa"
                                placeholder="EMAIL" required>
                        </div>


                        <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 mt-3">
                            <button type="submit" id="ContactoFormulario"
                                class="btn btn_info btn-lg mb-3 ContactoFormulario">
                                <span class="spinner-border spinner-border-sm" id="spinnerTaller" role="status"
                                    aria-hidden="true"
                                    style="width: 1.4rem; height: 1.4rem;margin-right: 8px;display: none;">
                                </span>
                                Enviar
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>