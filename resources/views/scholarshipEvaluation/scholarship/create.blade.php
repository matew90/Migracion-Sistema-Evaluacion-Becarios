@extends('layout.main')
@section('title')
  UAQ | Alta Becario
@endsection
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="card mb-4">
        <div class="card-body mb-0">
        <h4 class="mt-0 header-title">Alta de Becario</h4>
          <form  action="" method="post">

                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label class="col-sm-2 col-form-label text-right">Id SIU<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <label class="col-sm-2 col-form-label text-justify">Nombre (s)<span class="text-danger">*</span></label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                        </div>
                    </div>
                  </div>
                </div>
                
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label class="col-sm-3 col-form-label text-justify">Apellido Paterno<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="col-sm-3 col-form-label text-justify">Apellido Materno<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label class="col-sm-2 col-form-label text-justify">Carrera<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <select class="select2-single-placeholder form-control select2-hidden-accessible" name="area" id="area" data-select2-id="select2SinglePlaceholder" tabindex="-1" aria-hidden="true">
                                <option value="">Selecciona una opción</option>
                              </select> 
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="col-sm-2 col-form-label text-justify">Tipo de beca<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label class="col-sm-3 col-form-label text-justify">Porcentaje de beca<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                          </div>
                      </div>
                      <div class="col-lg-6">
                        <label class="col-sm-3 col-form-label text-justify">Correo Institucional<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="form-group row">
                      <div class="col-lg-6">
                        <label class="col-sm-3 col-form-label text-justify">Correo personal<span class="text-danger">*</span></label>
                          <div class="col-sm-10">
                            <input class="form-control" type="text" name="name" required>
                          </div>
                      </div>
                    </div>
                  </div>

                  


                  <div class="col-lg-12 text-right">
                    <div class="form-group row">
                      <div class="col-lg-12">
                        <button class="btn btn-warning" type="submit">Cancelar</button>
                        <button class="btn btn-success" type="submit">Registrar</button>
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

