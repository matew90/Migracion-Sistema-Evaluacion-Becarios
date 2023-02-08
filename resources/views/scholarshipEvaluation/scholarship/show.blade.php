@extends('layout.main')
@section('title')
  UAQ | Historial de Becarios
@endsection
@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body mb-0">
        
        <div class="card-body">
        
          <h4 class="mt-0 header-title">LISTADO DE BECARIOS</h4>
          <p class="text-muted mb-4 font-13">
              Available all products.
          </p>

          <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
              <tr>
                  <th>ID alumno</th>
                  <th>Nombre</th>
                  <th>Carrera</th>
                  <th>Correo</th>
                  <th>Tipo de Beca</th>
                  <th>Acciones</th>
              </tr>
              </thead>


              <tbody>
                <tr>
                    <td>
                        <img src="assets/images/products/img-2.png" alt="" height="52">
                        12
                    </td>
                    <td>
                      <p class="d-inline-block align-middle mb-0">
                        <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                        <br>
                        <span class="text-muted font-13">Villanueva Mateo</span> 
                      </p>
                    </td>
                    <td>Lic. Gastronomia</td>
                    <td>
                      marco.macias@anahuac.mx
                    </td>
                    <td>Excelencia</td>
                    
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
                  <td>
                    <p class="d-inline-block align-middle mb-0">
                      <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                      <br>
                      <span class="text-muted font-13">Villanueva Mateo</span> 
                    </p>
                  </td>
                  <td>Lic. Gastronomia</td>
                  <td>
                    marco.macias@anahuac.mx
                  </td>
                  <td>Excelencia</td>
                  
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
                <td>
                  <p class="d-inline-block align-middle mb-0">
                    <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                    <br>
                    <span class="text-muted font-13">Villanueva Mateo</span> 
                  </p>
                </td>
                <td>Lic. Gastronomia</td>
                <td>
                  marco.macias@anahuac.mx
                </td>
                <td>Excelencia</td>
                
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
              <td>
                <p class="d-inline-block align-middle mb-0">
                  <a href="" class="d-inline-block align-middle mb-0 product-name">Marco Antonio</a> 
                  <br>
                  <span class="text-muted font-13">Villanueva Mateo</span> 
                </p>
              </td>
              <td>Lic. Gastronomia</td>
              <td>
                marco.macias@anahuac.mx
              </td>
              <td>Excelencia</td>
              
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