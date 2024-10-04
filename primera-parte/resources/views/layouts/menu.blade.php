<!-- [ Layout sidenav ] Start -->
<div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-dark">
    <!-- Brand demo (see assets/css/demo/demo.css) -->
    <div class="app-brand demo">
        <a class="app-brand-logo demo layout-sidenav-toggle sidenav-link" href="javascript:;">
            <img src="{{ asset('admin_files/img/menu.png')}}"  class="img-fluid" >
        </a> 
        
    </div>
    
    <!-- Links -->
    @yield('menu')
</div>
<!-- [ Layout sidenav ] End -->