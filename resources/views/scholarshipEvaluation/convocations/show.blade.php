
@extends('layout.main')
@section('title')
  UAQ | Historial de Convocatorias
@endsection

@section('content')

<div class="row">
  <div class="col-lg-12">
    <div class="card mb-4">
      <div class="card-body mb-0">
        <div class="table-responsive p-3">
          <div class="dataTable_wrapper dt-boostrap-4">
            <div class="row">
              <div class="col-sm-12 col-md-6">
              
              </div>
            </div>
          </div>
        </div>
       
        <div class="row">
          @foreach ($convocatorias as $conv)
          @csrf

          @if (session('success'))
          <h6 class="alert alert-success">{{session('success')}}</h6>
          @endif
          @error('title')
          <h6 class="alert alert-danger">{{$message}}</h6>
          @enderror
          <div class="col-lg-4">
            
            <div class="card profile-card">
                <div class="card-body bg-soft-info p-0" >
                  <div class="media p-3  align-items-center" style="background: #ff5900; color: #fff">                                                
                    <div class="media-body ml-3  align-self-center">
                      <h5 class="mb-1">Convocatoria {{$conv->conv_name}}</h5>
                      <p class="mb-0 font-12">{{$conv->conv_email}}</p>                                                    
                    </div>
                      <form action="{{route('convocatoria-becarios.convocatoria.destroy',[$conv->id])}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-outline-primary btn-round waves-effect waves-light">Eliminar</button>
                      </form>
                      
                  </div>
                </div><!--end card-body--> 

                <div class="card-body pb-0">
                  <h6 class="text-center">Periodo: 202210</h6>
                  <p class="font-14 text-muted text-center">Descripción opcional</p>    
                </div><!--end card-body--> 

                <div class="card-body socials-data pb-0 px-0">
                  <div class="row text-center border-top m-0">
                    
                    <div class="col-6 border-right py-3">
                      <h3 class="mt-0 mb-1">2022-05-03</h4>
                        <span class="font-14 text-muted">Fecha Inicio</span>
                    </div><!--end col-->

                    <div class="col-6 border-right py-3">
                      <h3 class="mt-0 mb-1">2022-05-27</h3>
                      <span class="font-14 text-muted">Fecha Final</span>
                    </div>  <!--end col-->                                          
                  </div><!--end row-->
                </div> <!--end card-body-->                                 
              </div><!--end col--> 
          </div><!--end col-lg-4--> 
        @endforeach 
        </div>   
      </div>  
    </div>
  </div>
</div>
@endsection