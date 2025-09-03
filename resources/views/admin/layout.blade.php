

<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>@yield('title')</title>

        <!-- Fontfaces CSS-->
        <link href="{{asset('admin_assets/css/font-face.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin_assets/vendor/fontawesome-6.7.2/css/all.min.css')}}" rel="stylesheet" media="all">
        <link href="{{asset('admin_assets/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="{{asset('admin_assets/vendor/bootstrap-5.3.7.min.css')}}" rel="stylesheet" media="all">


        <!-- Main CSS-->
        <link href="{{asset('admin_assets/css/theme.css')}}" rel="stylesheet" media="all">

    </head>

    <body>
        @include('admin.header')

        @yield('header')


        <div id="body">
            @section('body')
            @show
        </div>
        @include('admin.footer')

        @yield('footer')





    <!-- Jquery JS-->
    <script src="{{asset('admin_assets/js/vanilla-utils.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('admin_assets/vendor/bootstrap-5.3.7.bundle.min.js')}}"></script>


    <!-- Main JS-->
    <script src="{{asset('admin_assets/js/bootstrap5-init.js')}}"></script>
    <script src="{{asset('admin_assets/js/main-vanilla.js')}}"></script>
    </body>
</html>




