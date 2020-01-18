<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Biafra | Dashboard</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">

      <div class="container">
        <div class="navbar-vertical-wrapper"></div>
        <!-- side nav -->
        @yield('sidebar')
        <!-- side nav -->
        <div class="content">
        
            <!-- header -->
            @yield('header')
            <!-- header -->

            <!-- body -->
            @yield('body')
            <!-- body -->

            <!-- footer -->
            @yield('footer')
            <!-- footer -->
         
        </div>
      
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/lib/stickyfilljs/stickyfill.min.js') }}"></script>
    <script src="{{ asset('assets/lib/sticky-kit/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('assets/lib/is_js/is.min.js') }}"></script>
    <script src="{{ asset('assets/lib/%40fortawesome/all.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lodash/lodash.min.js') }}"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122907869-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-122907869-1');
    </script>
  
    <script src="{{ asset('assets/lib/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables-bs4/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables.net-responsive/dataTables.responsive.js') }}"></script>
    <script src="{{ asset('assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js') }}"></script>
    <script src="{{ asset('assets/js/theme.js') }}"></script>
  </body>

</html>