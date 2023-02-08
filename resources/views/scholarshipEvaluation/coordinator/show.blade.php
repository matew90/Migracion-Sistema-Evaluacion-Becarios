@extends('layout.main')
@section('title')
  UAQ | Listado coordinadores
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body mb-0">
        
        <div class="card-body">
        
          <h4 class="mt-0 header-title">LISTADO DE COORDINADORES/EVALUADORES</h4>
          <p class="text-muted mb-4 font-13">
              Available all products.
          </p>

          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
              <tr>
                  <th>#</th>
                  <th>Estatus</th>
                  <th>Periodo</th>
                  <th>Nombre</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Final</th>
                  <th>Acciones</th>
              </tr>
              </thead>


              <tbody>
                <tr>
                    <td>
                        <img src="assets/images/products/img-2.png" alt="" height="52">
                        12
                    </td>
                    <td><span class="badge badge-soft-success">Activo</span></td>
                    <td>enero-junio</td>
                    <td>
                      <p class="d-inline-block align-middle mb-0">
                        <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                        <br>
                        <span class="text-muted font-13">Villanueva Mateo</span> 
                      </p>
                    </td>
                    <td>17 de enero | 2023</td>
                    <td>
                      17 de enero | 2023
                    </td>
                    <td>
                      <div class="button-items">
                        <button type="button" class="btn btn-success waves-effect waves-light"> <i class="mdi mdi-square-edit-outline"></i> Editar</button>  
                        <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can"></i>Eliminar</button>
                        </div>
                    </td>
                </tr>
                
                <tr>
                  <td>
                      <img src="assets/images/products/img-2.png" alt="" height="52">
                      12
                  </td>
                  <td><span class="badge badge-soft-warning">Inactivo</span></td>
                  <td>enero-junio</td>
                  <td>
                    <p class="d-inline-block align-middle mb-0">
                      <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                      <br>
                      <span class="text-muted font-13">Villanueva Mateo</span> 
                    </p>
                  </td>
                  <td>17 de enero | 2023</td>
                  <td>
                    17 de enero | 2023
                  </td>
                  <td>
                    <div class="button-items">
                      <button type="button" class="btn btn-success waves-effect waves-light"> <i class="mdi mdi-square-edit-outline"></i> Editar</button>  
                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can"></i>Eliminar</button>
                    </div>
                  </td>
                </tr>
                
                <tr>
                  <td>
                    <img src="assets/images/products/img-2.png" alt="" height="52">12
                  </td>
                  <td><span class="badge badge-soft-success">Activo</span></td>
                  <td>enero-junio</td>
                  <td>
                    <p class="d-inline-block align-middle mb-0">
                      <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                      <br>
                      <span class="text-muted font-13">Villanueva Mateo</span> 
                    </p>
                  </td>
                  <td>17 de enero | 2023</td>
                  <td>
                    17 de enero | 2023
                  </td>
                  <td>
                      <div class="button-items">
                        <button type="button" class="btn btn-success waves-effect waves-light"> <i class="mdi mdi-square-edit-outline"></i> Editar</button>  
                        <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can"></i>Eliminar</button>

                      </div>
                  </td>
                </tr>  

                <tr>
                  <td>
                      <img src="assets/images/products/img-2.png" alt="" height="52">
                      12
                  </td>
                  <td><span class="badge badge-soft-danger">Inactivo</span></td>
                  <td>enero-junio</td>
                  <td>
                    <p class="d-inline-block align-middle mb-0">
                      <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                      <br>
                      <span class="text-muted font-13">Villanueva Mateo</span> 
                    </p>
                  </td>
                  <td>17 de enero | 2023</td>
                  <td>
                    17 de enero | 2023
                  </td>
                  <td>
                    <div class="button-items">
                      <button type="button" class="btn btn-success waves-effect waves-light"> <i class="mdi mdi-square-edit-outline"></i> Editar</button>  
                      <button type="button" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-trash-can"></i>Eliminar</button>
                    </div>
                  </td>
                </tr>  
              </tbody>
          </table>
        </div>
        
      </div>
    </div>
  </div>
</div>

@endsection