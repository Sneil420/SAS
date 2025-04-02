<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Style.css')}} -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('contenido')
        </main>
    </div>
    <script type="text/javascript" src="{{asset('admin/assets/js/jquery-ui/jquery-ui.min.js')}} "></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/popper.js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('admin/assets/js/bootstrap/js/bootstrap.min.js')}} "></script>
    <!-- waves js -->
    <script src="{{asset('admin/assets/pages/waves/js/waves.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('admin/assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('admin/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/vertical/vertical-layout.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('admin/assets/js/script.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#tabla').DataTable({
                language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            }
            });
        } );
</script>
</body>
</html>
