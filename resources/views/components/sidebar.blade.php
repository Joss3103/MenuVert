

<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        {{-- <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div> --}}
        <div class="sidebar-brand-text mx-3">Menu Vert </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="layouts.dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fa-solid fa-bowl-food"></i>
            <span>Categorias</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">    
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Comidas y bebidas:</h6>
                <a class="collapse-item nav-link" href="partials.showbebidas">Bebidas</a>
                <a class="collapse-item" href="partials.showDesayunos">Desayunos</a>
                <a class="collapse-item" href="partials.showAlmuerzos">Almuerzos</a>
                <a class="collapse-item" href="partials.showComidas">Comidas</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="partials.showClientes" 
            aria-expanded="true">
            <i class="fa-sharp fa-solid fa-person"></i>
            <span>Clientes</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
             {{--    <h6 class="collapse-header">Menu Clientes:</h6> --}}
              {{--   <a class="collapse-item" href="utilities-color.html">Agregar</a>
                <a class="collapse-item" href="utilities-border.html">Eliminar</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a> --}}
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Más opciones
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" 
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa-solid fa-cart-shopping"></i>
            <span>Ventas</span>
        </a>
       
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#" 
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fa-solid fa-book-bookmark"></i>
            <span>Reservaciones</span>
        </a>
       
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="partials.showUsuarios">
            <i class="fa-solid fa-users"></i>
            <span>Usuarios</span></a>
    </li>

    <!-- Nav Item - Tables -->
 

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

   

</ul>
