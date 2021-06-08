<!doctype html>
<html lang="es">


<!-- Mirrored from demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Mar 2017 21:29:18 GMT -->
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/assets/img/apple-icon.png')}}" />
    <link rel="icon" type="image/png" href="{{asset('/assets/img/favicon.png')}}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Laured | @yield('title')</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/datatables.min.css')}}" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{asset('assets/css/material-dashboard.css')}}" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{asset('/assets/css/demo.css')}}" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="{{asset('/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('/assets/css/google-roboto-300-700.css')}}" rel="stylesheet" />


    <!--     Editor de texto     -->
    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>

@yield('index')

</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="green" data-background-color="black" data-image="../assets/img/sidebar-1.jpg">
            <div class="logo">
                <a href="/Administrador" class="simple-text">
                    <h4>@yield('nombre_vista')</h4>
                </a>
            </div>
            <div class="logo logo-mini">
                <a href="/Administrador" class="simple-text">
                    FH
                </a>
            </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="../assets/img/faces/FotoPersonal.png" />
                        <img src="{{asset('assets/img/faces/marc.jpg')}}" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            Alexs Ocampo
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">
                                <li>
                                    <a href="#">Perfil</a>
                                </li>
                                <li>
                                    <a href="#">Editar Perfil</a>
                                </li>
                                <li>
                                    <a href="#">Configuraciones</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="">
                        <a href="/inicio">
                            <i class="material-icons">dashboard</i>
                            <p>Inicio</p>
                        </a>
                    </li>
                    <li class="">
                        <a data-toggle="collapse" href="#Departamentos">
                            <i class="material-icons">assignment</i>
                            <p>Departamentos
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="Departamentos">
                            <ul class="nav">
                                <li>
                                    <a href="">Servicio al Cliente</a>
                                </li>
                                <li>
                                    <a href="">Gestion humana</a>
                                </li>
                                <li>
                                    <a href="">Contabilidad</a>
                                </li>
                                <li>
                                    <a href="">Mercadeo</a>
                                </li>
                                <li>
                                    <a href="">Logistica</a>
                                </li>
                                <li>
                                    <a href="">Compras</a>
                                </li>
                                <li>
                                    <a href="">Cartera</a>
                                </li>
                                <li>
                                    <a href="">Ventas</a>
                                </li>
                                <li>
                                    <a href="">TIC</a>
                                </li>
                            </ul>
                        </div>
                    </li> 
                    <li class="">
                        <a data-toggle="collapse" href="#Perfiles">
                            <i class="material-icons">assignment_ind</i>
                            <p>Perfiles
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse" id="Perfiles">
                            <ul class="nav">
                                <li>
                                    <a href="">Servicio al Cliente</a>
                                </li>
                                <li>
                                    <a href="">Gestion humana</a>
                                </li>
                                <li>
                                    <a href="">Contabilidad</a>
                                </li>
                                <li>
                                    <a href="">Mercadeo</a>
                                </li>
                                <li>
                                    <a href="">Logistica</a>
                                </li>
                                <li>
                                    <a href="">Compras</a>
                                </li>
                                <li>
                                    <a href="">Cartera</a>
                                </li>
                                <li>
                                    <a href="">Ventas</a>
                                </li>
                                <li>
                                    <a href="">TIC</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="inicio"><b>Laumayer </b><span>Lau</span>red</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">2</span>
                                    <p class="hidden-lg hidden-md">
                                        Notificaciones
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Cliente nuevo</a>
                                    </li>
                                    <li>
                                        <a href="#">Cliente nuevo</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">
                                        Perfil
                                        <b class="caret"></b>
                                    </p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="">Cerrar Sesión</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group form-search is-empty">
                                <input type="text" class="form-control" placeholder="Buscar">
                                <span class="material-input"></span>
                            </div>
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>


            @yield('gerente')
            @yield('jefe')
            @yield('analista')
            @yield('auxiliar')
            @yield('aprendiz')

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="#">
                                    Inicio
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="/">Laumayer Laured</a>
                    </p>
                </div>
            </footer>
        </body>
        <!--   Core JS Files   -->
        <script src="{{asset('/assets/js/jquery-3.1.1.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('/assets/js/jquery-ui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('/assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('/assets/js/material.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('/assets/js/perfect-scrollbar.jquery.min.js')}}" type="text/javascript"></script>
        <!-- Forms Validations Plugin -->
        <script src="{{asset('/assets/js/jquery.validate.min.js')}}"></script>
        <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
        <script src="{{asset('/assets/js/moment.min.js')}}"></script>
        <!--  Charts Plugin -->
        <script src="{{asset('/assets/js/chartist.min.js')}}"></script>
        <!--  Plugin for the Wizard -->
        <script src="{{asset('/assets/js/jquery.bootstrap-wizard.js')}}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{asset('/assets/js/bootstrap-notify.js')}}"></script>
        <!--   Sharrre Library    -->
        <script src="{{asset('/assets/js/jquery.sharrre.js')}}"></script>
        <!-- DateTimePicker Plugin -->
        <script src="{{asset('/assets/js/bootstrap-datetimepicker.js')}}"></script>
        <!-- Vector Map plugin -->
        <script src="{{asset('/assets/js/jquery-jvectormap.js')}}"></script>
        <!-- Sliders Plugin -->
        <script src="{{asset('/assets/js/nouislider.min.js')}}"></script>
        <script src="{{asset('/assets/js/jquery.select-bootstrap.js')}}"></script>
        <!--  DataTables.net Plugin    -->
        <script src="{{asset('/assets/js/datatables.min.js')}}"></script>
        <!-- Sweet Alert 2 plugin -->
        <script src="{{asset('/assets/js/sweetalert2.js')}}"></script>
        <!--  Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
        <script src="{{asset('/assets/js/jasny-bootstrap.min.js')}}"></script>
        <!--  Full Calendar Plugin    -->
        <script src="{{asset('/assets/js/fullcalendar.min.js')}}"></script>
        <!-- TagsInput Plugin -->
        <script src="{{asset('/assets/js/jquery.tagsinput.js')}}"></script>
        <!-- Material Dashboard javascript methods -->
        <script src="{{asset('/assets/js/material-dashboard.js')}}"></script>
        <script src="/assets/js/demo.js"></script>
        <script src="{{asset('/assets/js/script.js')}}"></script>



        @yield('style')
        @yield('scripts')
        <script type="text/javascript">

            $(document).ready(function() {
                $('#datatables').DataTable({
                    "pagingType": "full_numbers",
                    "lengthMenu": [
                    [10, 25, 50, -1],
                    [10, 25, 50, "All"]
                    ],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Busqueda",
                    }

                });


                var table = $('#datatables').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });

        $('.card .material-datatables label').addClass('form-group');


        
    });
</script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->

@yield('script')
</html>
