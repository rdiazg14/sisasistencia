@extends('layouts.app')

@section('contenido')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="float-left text-dark h5 ">Colegio LATINO - Modulo de Registro Asistencia</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="admin">DASHBOARD</a></li>
                <li class="breadcrumb-item active">Restringido</li>
              </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<style>
h3 {
  font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, "AppleGothic", sans-serif;
  font-size: 92px;
  padding: 80px 50px;
  text-align: center;
  text-transform: uppercase;
  text-rendering: optimizeLegibility;
}
.retroshd {
  color: #2c2c2c;
  background-color: #d5d5d5;
  letter-spacing: .05em;
  text-shadow: 4px 4px 0px #d5d5d5, 7px 7px 0px rgba(0, 0, 0, 0.2);
}
.retroshd:hover {
    text-decoration: none;
}
</style>

<div>
    <h3 class="retroshd"><i class="fas fa-exclamation-triangle"></i> <br> Acceso No<br> Permitido </h3>
</div>


    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




@endsection

@section('titulo')
SISAsistencia
@endsection
