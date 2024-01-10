<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Bikes To Book - Admin</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="{{asset('assets/css/vendors/bootstrap.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/css/main/admin-style.css')}}">


    <link rel="stylesheet" href="{{asset('assets/css/vendors/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendors/buttons.bootstrap4.min.css')}}">


</head>



<body id="reportsPage">

    @guest
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <h1 class="tm-site-title mb-0">Bikes To Book</h1>
        </div>
    </nav>
    @else
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="/dashboard">
                <h1 class="tm-site-title mb-0">Bikes To Book</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link" href="/dashboard">
                            Dashboard
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/motos">
                            Motos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/tours">
                            Tours
                        </a>
                    </li>
                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span> Settings <i class="fas fa-angle-down"></i> </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Billing</a>
                            <a class="dropdown-item" href="#">Customize</a>
                        </div>
                    </li> -->
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link d-block" href="/logout">
                            <b>Logout</b>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    @endguest
    
    <script src="{{ asset('assets/js/vendors/jquery.min.js')}}"></script>

    <script src="{{ asset('assets/js/vendors/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/dataTables.responsive.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/dataTables.buttons.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/buttons.html5.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/buttons.print.min.js')}}"></script>
    <script src="{{ asset('assets/js/vendors/buttons.colVis.min.js')}}"></script>
    @yield('content')

</body>

</html>