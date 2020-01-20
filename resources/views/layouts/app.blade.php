<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="theme-color" content="#e54c2a">
        <!-- Favicon -->
        <link type="image/x-icon" rel="shortcut icon" href="favicon.png') }}" />
        <title>Pizza</title>
        <meta name="description" content="STEAM - Restaurant, food and Drinks HTML5 website template is Modern, Clean and Professional site template. Prefect for RESTAURANT, Bakery, Cafe, Bar, Catering, food business and for personal chef portfolio website."> 

        <!-- Bootstrap stylesheet -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- <link href="{{ asset('app_assets/libs/bootstrap-4.0.0-dist/css/bootstrap.min.css') }}" rel="stylesheet"> -->
        <!-- icofont -->
        <link href="{{ asset('app_assets/libs/icofont/css/icofont.css') }}" rel="stylesheet" type="text/css" />
        <!-- crousel css -->
        <link href="{{ asset('app_assets/libs/owlcarousel2/assets/owl.carousel.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Animated Headlines css -->
        <link href="{{ asset('app_assets/libs/animated-headlines/animated-headlines.css') }}" rel="stylesheet" type="text/css" />
        <!-- mb.YTPlayer css -->
        <link href="{{ asset('app_assets/libs/mb.YTPlayer/css/jquery.mb.YTPlayer.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Switch Style css -->
        <link href="{{ asset('app_assets/switch-style/switch-style.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Theme Stylesheet -->
        <link href="{{ asset('app_assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Switch Color Style css -->
        <link href="#" data-style="styles" rel="stylesheet">
    </head>
    <body>
        <div class="wrapper">
            <!--Body Start -->
                @yield('content')
            <!--Body Start -->

            <!-- Footer Start -->
                @yield('footer')
            <!-- Footer End -->

            <!-- Menu Start -->
                @yield('menu')
            <!-- Menu End -->
            
            <!-- jquery -->
            <script src="{{ asset('app_assets/libs/jquery/jquery.min.js') }}"></script>
            <!-- jquery Validate -->
            <script src="{{ asset('app_assets/libs/jquery-validation/jquery.validate.min.js') }}"></script>
            <!-- popper js -->
            <script src="{{ asset('app_assets/libs/popper/popper.min.js') }}"></script>
            <!-- bootstrap js -->
            <script src="{{ asset('app_assets/libs/bootstrap-4.0.0-dist/js/bootstrap.min.js') }}"></script>
            <!-- owlcarousel js -->
            <script src="{{ asset('app_assets/libs/owlcarousel2/owl.carousel.min.js') }}"></script>
            <!--inview js code-->
            <script src="{{ asset('app_assets/libs/jquery.inview/jquery.inview.min.js') }}"></script>
            <!--CountTo js code-->
            <script src="{{ asset('app_assets/libs/jquery.countTo/jquery.countTo.js') }}"></script>
            <!-- Animated Headlines js code-->
            <script src="{{ asset('app_assets/libs/animated-headlines/animated-headlines.js') }}"></script>
            <!-- mb.YTPlayer js code-->
            <script src="{{ asset('app_assets/libs/mb.YTPlayer/jquery.mb.YTPlayer.min.js') }}"></script>
            <!-- Switch Style js -->
            <script src="{{ asset('app_assets/switch-style/switch-style.js') }}"></script>
            <!--internal js-->
            <script src="{{ asset('app_assets/js/internal.js') }}"></script>
        </div>
    </body>

</html>
