@extends('layout.main')
@section('title')
  UAQ | Crear Convocatoria
@endsection

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-body mb-0">
        <h4 class="mt-0 header-title">Crear Convocatoria</h4>
        <p class="text-muted mb-4">Los campos marcados con <span class="r-red">*</span> son obligatorios.</p>
          <form  action="{{route('convocatoria-becarios.convocatoria.create')}}" method="post">
            @csrf
            

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label for="periodo" class="col-sm-2 col-form-label text-right">Periodo<span class="text-danger">*</span></label>
                      <div class="col-sm-10">
                        <div class="form-group">
                          <span class="input-group-prepend">
                          <button type="button" class="btn btn-primary"><i class="mdi mdi-school mdi-18px"></i></button>
                          <input class="form-control" type="number" id="periodo" name="periodo" required>
                        </span>
                          
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
                
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label for="nombre" class="col-sm-2 col-form-label text-right">Nombre<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <span class="input-group-prepend">
                              <button type="button" class="btn btn-primary"><i class="dripicons-user mdi-18px"></i></button>
                              <input class="form-control" type="number" id="periodo" name="periodo" required>
                            </span>
                            
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="email" class="col-sm-3 col-form-label text-right">Correo de contacto<span class="text-danger">*</span></label>
                          <div class="col-sm-12">
                            <span class="input-group-prepend">
                              <button type="button" class="btn btn-primary"><i class="mdi mdi-email-mark-as-unread mdi-18px"></i></button>
                              <input class="form-control" type="number" id="periodo" name="periodo" required>
                            </span>
                            
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label for="fecha_inicio" class="col-sm-2 col-form-label text-right">Fecha inicio<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <span class="input-group-prepend">
                              <button type="button" class="btn btn-primary"><i class="mdi mdi-calendar-check-outline mdi-18px"></i></button>
                              <input class="form-control" type="date" name="fecha_inicio" required>
                            </span>
                            
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label for="fecha_fin" class="col-sm-2 col-form-label text-right">Fecha final<span class="text-danger">*</span></label>
                          <div class="col-sm-12">
                            <span class="input-group-prepend">
                              <button type="button" class="btn btn-primary"><i class="mdi mdi-calendar-check-outline mdi-18px"></i></button>
                              <input class="form-control" type="date" name="fecha_inicio" required>

                            </span>
                            
                            
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <table width="100%">
                      <tbody>
                        

                          <div class="col-sm-10">
                            <table width="100%" style="border: 1px solid #8c34ea; border-radius: 10px;">
                              <tbody><tr>
                                <td class="borde-right text-center"><label class="datInfo"><b>Porcentaje de beca</b><span style="color: #8c34ea;"> *</span></label></td>
                                <td class="borde-right text-center"><label class="datInfo"><b>Horas a la semana</b></label></td>
                                <td class="text-center"><label class="datInfo"><b>Horas al semestre</b></label></td>
                              </tr>
                            <tr>
                              <td class="borde-right text-center">
                                
                                    <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="porcBecab" name="porcBeca[]" value="b">
                                          <label class="custom-control-label" for="porcBecab">5% a 25%</label>
                                        </div>
                                    <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="porcBecac" name="porcBeca[]" value="c">
                                          <label class="custom-control-label" for="porcBecac">26% a 50%</label>
                                        </div>
                                    <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="porcBecad" name="porcBeca[]" value="d">
                                          <label class="custom-control-label" for="porcBecad">51% a 75%</label>
                                        </div>
                                    <div class="custom-control custom-checkbox">
                                          <input type="checkbox" class="custom-control-input" id="porcBecae" name="porcBeca[]" value="e">
                                          <label class="custom-control-label" for="porcBecae">76% a 100%</label>
                                        </div>						  </td>
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
                            </tbody></table>
                            </div>
                          
                        

                        </tr>
                      </tbody>
                    </table>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-12">
                        
                        <label for="comentarios" class="col-sm-1 col-form-label text-right">Comentarios<span class="text-danger">*</span></label>
                          <div class="col-sm-12">
                             <span class="input-group-prepend">
                              <button type="button" class="btn btn-primary"><i class="mdi mdi-comment mdi-18px"></i></button>
                              <input class="form-control" type="text" name="comentarios" required>

                            </span>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12 text-right">
                    <div class="form-group row">
                      <div class="col-sm-12">
                        <button class="btn btn-outline-primary btn-round waves-effect waves-light" type="submit">Cancelar</button>
                        <button class="btn btn-outline-primary btn-round waves-effect waves-light" type="submit">Registrar
                          <i class="mdi mdi-arrow-right mr-2"></i>
                        </button>
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