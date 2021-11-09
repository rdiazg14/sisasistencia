<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo  -->

<a href="admin" class="brand-link bg-gradient-primary logo-switch elevation-3" >
<img src="{{  asset('dist/img/logo-xl.png') }}" alt="Logo Sedapal" class="brand-image-xl logo-xl elevation-3 rounded mb-0" >
<img src="{{  asset('dist/img/logo-xs.png') }}" alt="Logo Gotita Sedapal" class="brand-image-xs logo-xs  elevation-3 rounded mb-0">
<span class="brand-text bg-gradient-primary font-weight-bold d-inline-block float-right mr-1 ">EXCELENCIA</span>
</a>



  <!-- Sidebar -->
  <div class="sidebar " >
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex elevation-1">
      <div class="image ">
        <img src="dist/img/User_icon.png" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info ">
        <a href="#" class="d-block">{{ $nombreUsuario }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2 ">
      <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library    active  -->

             <li class="nav-item ">
              <a href=" {{$menuTablero['ruta'] }}" class="nav-link active"> 
                <i class="nav-icon fas fa-tv"></i>
                <p>
                  {{$menuTablero['titulo'] }}
                  <span class="right badge badge-danger">Principal</span>
                </p>
              </a>
            </li>                 

        @foreach ($opcionesMenu as $nombreModulo => $opciones)
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-graduation-cap"></i>
            <p>
               {{$nombreModulo}}
              <i class="right fas fa-arrow-alt-circle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            @foreach ($opciones as $key => $value)
            <li class="nav-item">
              <a href="{{ $value['ruta'] }}" class="nav-link">
                <i class="fas fa-pencil-alt nav-icon"></i> 
                <p>{{ $value['titulo'] }}</p>
              </a>
            </li>                
            @endforeach

          </ul>
        </li>          
        @endforeach

      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>