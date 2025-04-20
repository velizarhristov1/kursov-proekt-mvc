<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'Топ-Лаптопи')</title>
    <!-- <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet"> -->
    <!-- <link href="{{url('css/offcanvas.css')}}" rel="stylesheet"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column min-vh-100" style="padding-top: 70px;"> 

    @section('navigation')

    @show

    <div class="container flex-grow-1">

        <div class="row row-offcanvas row-offcanvas-right">

            <div class="col-12">
                <p class="pull-right visible-xs">
                    <!-- <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button> -->
                </p>
                <div class="jumbotron">
                    @section('maincontent')

                    @show
                </div>

            </div>

            <!-- <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
                @section('sidebar')

                @show


            </div> -->
        </div>
        

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

<footer class="bg-dark text-center py-5 mt-auto">
            <div class="container">
                <span class="text-light">© 2025 All rights reserved</span>
            </div>
        </footer>

</html>