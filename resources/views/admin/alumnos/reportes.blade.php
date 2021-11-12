@extends('layouts.app')

@section('contenido')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="float-left text-dark font-weight-bold ">Colegio LATINO - Modulo de Reportes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">DASHBOARD</a></li>
              <li class="breadcrumb-item active">Reportes</li>
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
                                <h3>Crear Reporte de Asistencia</h3>
                                </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <form autocomplete="off" action="" id="formulario_buscar" class="form-inline">
                                            <div class="form-group">
                                                <label for="" class="col-form-label mr-3">DNI</label>
                                                <input type="text" id="nombre" name="nombre" class="form-control" placeholder="buscar DNI ..."/>
                                            </div>
                                            <button onclick="buscar()" type="button" class="btn btn-sm btn-primary ml-2 mr-2"><i class="fas fa-search"></i>
                                                Buscar
                                            </button> 
                                            {{-- <button onclick="formularioCrear(this)" type="button" class="btn btn-sm btn-success ml-2 mr-2"><i class="fas fa-plus"></i> --}}
                                                <button onclick="" type="button" class="btn btn-sm btn-success ml-2 mr-2"><i class="fas fa-receipt"></i> - 
                                                Generar Reporte de Asistencia
                                            </button>
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
          buscar();
        }
      });
      buscar();
    });

    function buscar(pagina = 1) {
    const nombre = document.getElementById('nombre').value;
    axios.get('{{ route('alumnos.buscar') }}', {
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

//data-toggle="modal" data-target="#modal-alumno" 
function cargandoModal() {
            $('#contenido-modal').html(`<div class="modal-header">
                <h4 class="modal-title">Registro de Asistencia en Linea</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex justify-content-center">
                    <div class="spinner-border" role="status">
                        <span class="sr-only">Cargando...</span>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-success">Registrar</button>
            </div>`);
        }

function formularioCrear(boton) {
            cargandoModal();
            boton.setAttribute('disabled', true);
            $('#modal-alumno').modal('show');
            axios.get('{{ route("alumnos.create") }}')
                .then(function (respuesta) {
                    document.getElementById('contenido-modal').innerHTML = respuesta.data;
                    $('#contenido-modal').html(respuesta.data);
                })
                .catch(function (error) {
                    toastr.error('Error cargando modal, informar a sistemas');
                })
                .finally(function (){
                boton.removeAttribute('disabled')
            });
        }


</script>
@endpush


@section('titulo')
SISAsistencia | REPORTE ALUMNO
@endsection
