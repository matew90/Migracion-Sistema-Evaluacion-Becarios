@extends('layout.main')
@section('title')
  UAQ | Crear Convocatoria
@endsection
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css">

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-body mb-0">
        <h4 class="mt-0 header-title">Crear Convocatoria</h4>
          <form  action="{{route('convocatoria-becarios.convocatoria.create')}}" method="post">
            @csrf
            

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label for="periodo" class="col-sm-2 col-form-label text-right">Periodo<span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                        <input class="form-control" type="number" id="periodo" name="periodo" required>
                      </div>
                    </div>
                  </div>
                </div>
                
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label for="nombre" class="col-sm-2 col-form-label text-right">Nombre<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" id="nombre" name="nombre" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="email" class="col-sm-3 col-form-label text-right">Correo de contacto<span class="text-danger">*</span></label>
                          <div class="col-sm-12">
                            <input class="form-control" type="email" name="email" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label for="fecha_inicio" class="col-sm-2 col-form-label text-right">Fecha inicio<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="date" name="fecha_inicio" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="fecha_fin" class="col-sm-2 col-form-label text-right">Fecha final<span class="text-danger">*</span></label>
                          <div class="col-sm-12">
                            <input class="form-control" type="date" name="fecha_fin" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <table width="90%">
                      <tbody>
                        <tr>
                          <td class="borde-right text-center">
                            <label class="datInfo">
                              <b>Porcentaje de beca</b>
                            </label>
                          </td>
                          <td class="borde-right text-center">
                            <label class="datInfo">
                              <b>Horas a la semana</b>
                            </label>
                          </td>
                          <td class="text-center">
                            <label class="datInfo">
                              <b>Horas al semestre</b>
                            </label>
                          </td>
                        </tr>
                        <tr>
                          <td class="borde-right text-center">
                            <div class="custom-control custom-checkbox">
                              <input class="" type="checkbox" name="" id="">
                              <label class="" for="">5% a 25%</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="" type="checkbox" name="" id="">
                              <label class="" for="">26% a 50%</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="" type="checkbox" name="" id="">
                              <label class="" for="">51% a 75%</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                              <input class="" type="checkbox" name="" id="">
                              <label class="" for="">76% a 100%</label>
                            </div>
                          </td>

                          <td class="text-center borde-right">
                            <div> 2 </div>
                            <div> 4 </div>
                            <div> 6 </div>
                            <div> 8 </div>
                          </td>

                          <td class="text-center">
                            <div> 30 </div>
                            <div> 60 </div>
                            <div> 90 </div>
                            <div> 120 </div>
                          </td>

                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <label for="comentarios" class="col-sm-1 col-form-label text-right">Comentarios<span class="text-danger">*</span></label>
                          <div class="col-sm-12">
                            <input class="form-control" type="text" name="comentarios" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12 text-right">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button class="btn btn-outline-primary btn-round waves-effect waves-light" type="submit">Cancelar</button>
                        <button class="btn btn-outline-primary btn-round waves-effect waves-light" type="submit">Registrar</button>
                      </div>
                    </div>
                  </div>
                  
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

<!-- Sweet-Alert  -->
<script src="{{ url('/public/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
<script src="{{ url('/public/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>

<script>
//VALIDACIÓN DE FORMULARIOS

$("#validate").click(function){
  var periodo=$("#periodo").val();
  var nombre=$("#nombre").val();
  var email=$("#email").val();
  var fecha_inicio=$("#fecha_inicio").val();
  var fecha_fin=$("#fecha_fin").val();
  var comentarios=$("#comentarios").val();

  if(nombre.length>5){
    Swal.fire({
       title: "El nombre es demasiado largo",
       text: "Intenta poner menos palabras en el nombre",
       type: "warning",
       confirmButtonText: 'Entendido'
     });
     $("#nombre").focus();
     return 0;
  }
}

</script>