<aside class="main-sidebar ">
    <!-- Brand Logo -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          {{-- ------------------------------------------------------------------------------- --}}
          <li class="nav-item has-treeview menu-open bordered center">
              <a href="" class="nav-link "> 
                <div class="space_menu"></div>
                </a>
            </li>
            {{-- ------------------------------------------------------------------------------- --}}
                <li class="nav-item has-treeview menu-open"  id="{{ request()->is('links*') ? 'active' : '' }}">
                    <a href="{{route('links.index')}}" class="nav-link "><i class="fas fa-regular fa-link" class="nav-link " ></i>
                        <p class="item-menu"> Links </p>
                    </a>
                </li>
            {{-- ------------------------------------------------------------------------------- --}}
             {{-- ------------------------------------------------------------------------------- --}}
             <li class="nav-item has-treeview menu-open"  id="{{ request()->is('fonte*') ? 'active' : '' }}">
                <a href="{{route('fontes.index')}}" class="nav-link "><i class="fa fa-globe"></i>
                    <p class="item-menu"> Fontes </p>
                </a>
            </li>
        {{-- ------------------------------------------------------------------------------- --}}
         {{-- ------------------------------------------------------------------------------- --}}
         @if (Session::get('idTipoUtilizador') == 1)
         <li class="nav-item has-treeview menu-open"  id="{{ request()->is('users*') ? 'active' : '' }}">
            <a href="{{route('users.index')}}" class="nav-link "><i class="fas fa-user" class="nav-link "></i>
                <p class="item-menu"> Utilizadores </p>
            </a>
        </li>
        @endif

    {{-- ------------------------------------------------------------------------------- --}}
        <li class="nav-item has-treeview menu-open"><a class="nav-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </aside>
<style>
    .main-sidebar{
        background: #063146;
    }
    #active{
        box-shadow: 5px 5px  5px #f4f6f9;
        /*background: #f4f6f9;*/
    }
    .sidebar ul a i,p{
        color: white;
        margin-right: 5px;
        font-size: 1.25rem;
    }
    .bordered{
        display: block;
        color: white;
        border-bottom: 1px solid rgb(255, 255, 255,.1);
        transition: .4s;
        line-height: 27px;
    }
   .space_menu{
       height: 28px;
   }
</style>