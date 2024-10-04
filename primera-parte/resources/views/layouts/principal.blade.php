<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>Administrator | Productos</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Bhumlu Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Bhumlu, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link href="{{ asset('favicon.png')}}" rel="icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{ asset('admin_files/fonts/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/fonts/ionicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/fonts/linearicons.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/fonts/open-iconic.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/fonts/pe-icon-7-stroke.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/fonts/feather.css')}}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{ asset('admin_files/css/bootstrap-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/css/shreerang-material.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/css/uikit.css')}}">
    <link href="{{asset('admin_files/dataTables.bootstrap4.css')}}" rel="stylesheet" type="text/css">
    <!-- Libs -->
    <link rel="stylesheet" href="{{ asset('admin_files/libs/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{ asset('admin_files/libs/flot/flot.css')}}">
    @yield('styles')
</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            @include('layouts.menu')
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                @include('layouts.header')

                <!-- CONTENIDO -->
                <div class="layout-content">

                    @yield('titulo')

                    @yield('content')

                    
                    <!-- [ Layout footer ] End -->
                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="{{ asset('admin_files/js/pace.js')}}"></script>
    <script src="{{ asset('admin_files/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('admin_files/libs/popper/popper.js')}}"></script>
    <script src="{{ asset('admin_files/js/bootstrap.js')}}"></script>
    <script src="{{ asset('admin_files/js/sidenav.js')}}"></script>
    <script src="{{ asset('admin_files/js/layout-helpers.js')}}"></script>
    <script src="{{ asset('admin_files/js/material-ripple.js')}}"></script>

    <!-- Libs -->
    <script src="{{ asset('admin_files/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{ asset('admin_files/libs/eve/eve.js')}}"></script>
    <script src="{{ asset('admin_files/libs/flot/flot.js')}}"></script>
    <script src="{{ asset('admin_files/libs/flot/curvedLines.js')}}"></script>
    <script src="{{ asset('admin_files/libs/chart-am4/core.js')}}"></script>
    <script src="{{ asset('admin_files/libs/chart-am4/charts.js')}}"></script>
    <script src="{{ asset('admin_files/libs/chart-am4/animated.js')}}"></script>
    <script src="{{asset('admin_files/jquery.dataTables.js')}}"></script>
    <script src="{{asset('admin_files/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin_files/dataTables.responsive.min.js')}}"></script>
    <!-- Demo -->
    <script src="{{ asset('admin_files/js/demo.js')}}"></script>
    <script src="{{ asset('admin_files/js/analytics.js')}}"></script>
    <script src="{{ asset('admin_files/js/pages/dashboards_index.js')}}"></script>
    <script>
        $(document).ready(function () {


            $('#basic-datatable').DataTable({
                language: {
                    paginate: {
                        next: 'Siguiente',
                        previous: 'Anterior'
                    }
                }
            });
            $("#botonmenu").click();
            $("#otroboton").removeClass("fa fa-arrow-right");
            $("#otroboton").addClass("fa fa-arrow-left");
        });
    </script>
    @yield('scripts')
</body>

</html>
