<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Corbin - Simple Admin Dashboard</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('front/images/favicon.png')}}">
    <link href="{{ asset('front/vendor/jqvmap/css/jqvmap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/vendor/bootstrap-daterangepicker/daterangepicker.css')}}">
    <link href="{{ asset('front/css/style.css')}}" rel="stylesheet">
</head>

<body>

    <div id="main-wrapper">


        @include('layouts.header')

        @include('layouts.sidebar')

        <div class="content-body">
            @yield('content')
        </div>

        @include('layouts.footer')

    </div>

    <script src="{{ asset('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ asset('front/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('front/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- Here is navigation script -->
    <script src="{{ asset('front/vendor/quixnav/quixnav.min.js')}}"></script>
    <script src="{{ asset('front/js/quixnav-init.js')}}"></script>
    <script src="{{ asset('front/js/custom.min.js')}}"></script>
    <!--removeIf(production)-->
    <!-- Demo scripts -->
    <script src="{{ asset('front/js/styleSwitcher.js')}}"></script>
    <!--endRemoveIf(production)-->


    <!-- Daterange picker library -->
    <script src="{{ asset('front/vendor/moment/moment.min.js')}}"></script>
    <script src="{{ asset('front/vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>


    <!-- Vectormap -->
    <script src="{{ asset('front/vendor/jqvmap/js/jquery.vmap.min.js')}}"></script>
    <script src="{{ asset('front/vendor/jqvmap/js/jquery.vmap.world.js')}}"></script>


    <!-- daterangepicker init -->
    <!-- <script src="./js/plugins-init/card-headerdatepicker-init.js"></script> -->


    <script src="{{ asset('front/vendor/chart.js/Chart.bundle.min.js')}}"></script>
    <script src="{{ asset('front/js/dashboard/dashboard-1.js')}}"></script>

    @stack('fornt-script')

</body>

<!-- Mirrored from demo.themefisher.com/corbin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Feb 2022 04:24:21 GMT -->

</html>