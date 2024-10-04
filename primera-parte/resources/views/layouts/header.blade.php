<!-- [ Layout navbar ( Header ) ] Start -->
<nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-white container-p-x" id="layout-navbar">

<!-- Brand demo (see assets/css/demo/demo.css) -->
<a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
    <span class="app-brand-logo demo">
        <img src="{{ asset('admin_files/img/logo-dark.png')}}" alt="Brand Logo" class="img-fluid">
    </span>
    <span class="app-brand-text demo font-weight-normal ml-2">Bhumlu</span>
</a>

<!-- Sidenav toggle (see assets/css/demo/demo.css) -->
<div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
    <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
        <i class="ion ion-md-menu text-large align-middle"></i>
    </a>
</div>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="navbar-collapse collapse" id="layout-navbar-collapse">
    <!-- Divider -->
    <hr class="d-lg-none w-100 my-2">
    
    <div class="navbar-nav align-items-lg-center ">
        <a class="nav-link " href="#" data-toggle="dropdown">
            <span class="d-inline-flex  align-items-center align-middle">
                <img src="{{ asset('admin_files/img/avatars/1.png')}}" alt class="d-block ui-w-30 rounded-circle">
                <span class="px-1 mr-lg-2 ml-2 " style="margin-left: 20px;"> Hola, {{Auth::user()->name}}</span>
            </span>
        </a>
    </div>
    
    <div class="navbar-nav align-items-lg-center ml-auto">
        

       

        <!-- Divider -->
        
        <div class="demo-navbar-user nav-item dropdown">
            <a href="{{route('logout')}}" class="dropdown-item btn-cerrar">
                <i class="feather text-white"><img  src="{{ asset('admin_files/img/cerrar-sesion.png')}}" alt="" width="20"></i> &nbsp; Cerrar Sesión
            </a>
            
        </div>
    </div>
</div>
</nav>
<!-- [ Layout navbar ( Header ) ] End -->