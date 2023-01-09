<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Right navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    <div id="top_topo">
        <div id="top_titulo"> SISTEMA GESTÃO DE LINKS </div>
    </div>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
          <span ><i class="fas fa-user"></i></span>
        </a>
        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <!-- User image -->
         
          <!-- Menu Footer-->
          <li class="user-footer">
          @if (Session::has('email'))
            <a href="" class="btn btn-default btn-flat">
                <i class="fas fa-user" style="color: cadetblue"></i>Perfil
            </a>
          @endif
            <a href="{{ asset(route('logout.index')) }}" class="btn btn-default btn-flat float-right">
                <i class="fas fa-power-off" style="color: red"></i>Sair
            </a>

          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <style>
      .dropdown-menu .dropdown-menu-lg .dropdown-menu-right{
          height: 10px !important;
      }
  </style>