@extends('layouts.app')

@section('contenido')
     <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="float-left text-dark font-weight-bold ">Colegio LATINO - Panel SISAsistencia</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin">Inicio</a></li>
              <li class="breadcrumb-item active">DASHBOARD</li>
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
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Asistencia Alumno</h3>

                            <p>Control de Asistencia ONLINE</p>
                        </div>
                        <div class="icon">   
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <a href="alumnos" class="small-box-footer">Acceder al módulo <i class="fas fa-arrow-circle-right"></i></a>

                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Asistencia Docente</h3>

                            <p>Control de Asistencia ONLINE</p>
                        </div>
                        <div class="icon">  
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <a href="docentes" class="small-box-footer">Acceder al módulo <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3>Asistencia Personal</h3>

                            <p>Control de Asistencia ONLINE</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <a href="administrativos" class="small-box-footer">Acceder al módulo <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Reporte Alumno</h3>

                            <p>Reporte de Asistencia ONLINE</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <a href="reportes" class="small-box-footer">Acceder al módulo <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Reporte Docente</h3>

                            <p>Reporte de Asistencia ONLINE</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-receipt"></i>
                        </div>
                        <a href="docentesrep" class="small-box-footer">Acceder al módulo <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3>Reporte Personal</h3>

                            <p>Reporte de Asistencia ONLINE</p>
                        </div>
                        <div class="icon"> 
                            <i class="fas fa-receipt"></i>
                        </div>
                        <a href="administrativosrep" class="small-box-footer">Acceder al módulo <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection

@section('titulo')
SISAsistencia | DASHBOARD
@endsection

