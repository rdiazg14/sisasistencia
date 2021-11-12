@extends('layouts.app')

@section('contenido')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="float-left text-dark font-weight-bold ">Colegio LATINO - Modulo Lista de Alumnos</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">DASHBOARD</a></li>
              <li class="breadcrumb-item active">Listado</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary card-outline">
                            <div class='card-header'>
                                <h3>Alumnos Matriculados Año 2021</h3>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form autocomplete="off" action="" id="formulario_buscar" class="form-inline">
                                            <div class="form-group">
                                                <label for="" class="col-form-label mr-3">DNI</label>
                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="buscar DNI ..."/>
                                            </div>
                                            <button onclick="buscaralumnolist()" type="button" class="btn btn-sm btn-primary ml-2 mr-2"><i class="fas fa-search"></i>
                                                Buscar
                                            </button> 
                                            {{-- <button onclick="formularioCrear(this)" type="button" class="btn btn-sm btn-success ml-2 mr-2"><i class="fas fa-plus"></i> --}}
                                        </form>
                                    </div>
                                </div>


                                <div class="row mt-3" id="div-tabla">
                                    <div class="col-12 d-flex justify-content-center">
                                        <div class="spinner-border" role="status">
                                            <span class="sr-only">Cargando...</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modal-alumno" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="contenido-modal">

            </div>
        </div>
    </div>




@endsection

@push('javascript_extra')
    <script>

document.addEventListener('DOMContentLoaded', function(evento){
      console.log('Estoy trabajando en el formularioBuscar')
      document.getElementById('formulario_buscar').addEventListener('submit', function(e){
        e.preventDefault();
      });
      document.getElementById('nombre').addEventListener('keydown',function(e){
        if(e.keyCode == 13){
            buscaralumnolist();
        }
      });
      buscaralumnolist();
    });

    function buscaralumnolist(pagina = 1) {
    const nombre = document.getElementById('nombre').value;
    axios.get('{{ route('alumnos.buscaralumnolist') }}', {
        "params": {
            "nombre": nombre,
            "page": pagina
        }
    }).then(function (respuesta) {
        document.getElementById('div-tabla').innerHTML = respuesta.data;
    }).catch(function (error) {
        // si hubo un error
    });
}




</script>
@endpush


@section('titulo')
SISAsistencia | LISTA ALUMNO
@endsection
