<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <title>Pet Friends</title>
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
        <link href="../css/bootstrap.min.css" rel="stylesheet" />
        <link href="../css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

        <!-- Styles -->
        <style>
             body {
                
                color: black;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100;
                margin: 0;
               
            }
          

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;

            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: blink;
                text-transform: unset;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

        </style>
    </head>

    <body>

    <div class="wrapper">
        <div class="sidebar" data-image="images/sidebar-3.jpg" data-color="red">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="/" class="simple-text">
                        Pet Friends Animal Shop
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="./ingresocategoria">
                            <i class="nc-icon nc-settings-90"></i>
                            <p>Ingresar Categoria</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/ingresoclientes">
                            <i class="nc-icon nc-circle-09"></i>
                            <p>Ingresar Clientes</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/ingresoprod">
                            <i class="nc-icon nc-notes"></i>
                            <p>Ingresar Productos</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/create">
                            <i class="nc-icon nc-paper-2"></i>
                            <p>Agregar Rol</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/crear_clas">
                            <i class="nc-icon nc-atom"></i>
                            <p>Agregar Clase Cuenta</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/crearEmple">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Agregar Empleado</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/ingresoprov">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Agregar Proveedor</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="/ingresoctas">
                            <i class="nc-icon nc-alien-33"></i>
                            <p>Agregar Cuenta</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Pet Friends <br>
                    Animal Shop
                </div>


                <div class="links">
                    <a href="/crear_natu">Agregar naturaleza de cuentas</a>
                    <a href="/ingresousua">Agregar usuario</a>
                    <a href="/agregarfactura">Agregar Factura</a>

                </div>

            </div>
        </div>

    </body>
    <!--   Core JS Files   -->
<script src="js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="js/core/popper.min.js" type="text/javascript"></script>
<script src="js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="js/plugins/bootstrap-switch.js"></script>
<!--  Chartist Plugin  -->
<script src="js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>

</html>
