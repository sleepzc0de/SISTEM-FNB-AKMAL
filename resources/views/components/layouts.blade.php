<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>FNB</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/libs/chartist/dist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/c3/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/extra-libs/datatables/datatables.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/libs/morris.js/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/dist/css/style.min.css') }}" rel="stylesheet">
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    
    <!-- Preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <!-- Topbar header -->
        <x-header></x-header>

        <!-- Left Sidebar -->
       <x-sidebar></x-sidebar>

        <!-- Page wrapper -->
        <div class="page-wrapper">
            {{ $slot }}
            
        </div>
        <footer class="footer text-center">
            All Rights Reserved by AdminBite admin. Designed and Developed by
            <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>


        <!-- End Page wrapper -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
        <script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
        <script src="{{ asset('assets/extra-libs/sparkline/sparkline.js') }}"></script>
        <script src="{{ asset('assets/libs/chartist/dist/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js') }}"></script>
        <script src="{{ asset('assets/extra-libs/c3/d3.min.js') }}"></script>
        <script src="{{ asset('assets/extra-libs/c3/c3.min.js') }}"></script>
        <script src="{{ asset('assets/libs/raphael/raphael.min.js') }}"></script>
        <script src="{{ asset('assets/libs/morris.js/morris.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/waves.js') }}"></script>
        <script src="{{ asset('assets/dist/js/sidebarmenu.js') }}"></script>
        <script src="{{ asset('assets/dist/js/custom.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/app.min.js') }}"></script>
        <script src="{{ asset('assets/dist/js/app.init.dark.js') }}"></script>
        <script src="{{ asset('assets/dist/js/app-style-switcher.js') }}"></script>
        <script src="{{ asset('assets/dist/js/pages/dashboards/dashboard1.js') }}"></script>
        
</body>

</html>
