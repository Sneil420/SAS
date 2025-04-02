<!DOCTYPE html>
<html lang="es">

<head>
    <title>Dirección de Procesos Académicos</title>
    <!-- HTML5 Shim and Respond.js')}} IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js')}} doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js')}}/1.4.2/respond.min.js')}}"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('admin/assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/bootstrap/css/bootstrap.min.css')}}">
    <!-- waves.css')}} -->
    <link rel="stylesheet" href="{{asset('admin/assets/pages/waves/css/waves.min.css')}}" type="text/css" media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/feather/css/feather.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/icon/font-awesome/css/font-awesome.min.css')}}">
    <!-- Style.css')}} -->
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('admin/assets/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    @yield('css')
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close"><i class="ti-close input-group-text"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn"><i class="ti-search input-group-text"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="{{asset('dpa.png')}}" width="150" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="ti-more"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notificaciones</h6>
                                        <label class="label label-danger">Nuevo</label>
                                    </li>
                                    <li class="waves-effect waves-light">
                                        <div class="media">
                                            <img class="d-flex align-self-center img-radius" src="{{asset('user.png')}}" alt="">
                                            <div class="media-body">
                                                <h5 class="notification-user">{{Auth::user()->name}}</h5>

                                            </div>
                                        </div>
                                    </li>
                                  
                                </ul>
                            </li>
                            <li class="user-profile header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <img src="{{asset('user.png')}}" class="img-radius" alt="User-Profile-Image">
                                    <span>{{Auth::user()->name}}</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                                    <li class="waves-effect waves-light">
                                        <a href="{{route('logout')}}">
                                            <i class="ti-layout-sidebar-left"></i> Cerrar Sesión
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="000"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                                <div class="main-menu-header">
                                    <img class="img-80 img-radius" src="{{asset('user.png')}}" alt="User-Profile-Image">
                                    <div class="user-details">
                                        <span id="more-details">{{Auth::user()->name}}<i class="fa fa-caret-down"></i></span>
                                    </div>
                                </div>
                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                            @include('pages.layouts.menu')
                            
                        </div>
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            @yield('titulo')
                        </div>
                        <!-- Page-header end -->
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                @yield('contenido')
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="styleSelector"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Warning Section Starts -->
    <!-- Warning Section Ends -->
    <!-- Required Jquery -->

    @routes
    @yield('scriptsinicial')
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

    @yield('scripts')

</body>

</html>
