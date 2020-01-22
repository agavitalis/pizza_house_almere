@extends('layouts.app')

@section('content')
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 

<!-- Loader Start -->
@include("partials/app.app_loader")
<!-- Loader End -->

    <!--  Header Start  -->
@include("partials/app.app_header")
<!-- Header End   -->

<!-- Breadcrumb Start -->
<div class="bread-crumb">
    <div class="container">
        <div class="matter">
            <h2>Page Not Found</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                <li class="list-inline-item"><a href="#">Page not found</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Service Start  -->
<div class="page-not-found">
    <div class="container">
        <div class="row ">
            <div class="col-sm-12 col-xs-12">

            </div>

            <!-- Title Content Start -->
            <div class="col-sm-12 col-xs-12 commontop text-center">
                <h4>Page not found!</h4>
                <div class="divider style-1 center">
                    <span class="hr-simple left"></span>
                    <i class="icofont icofont-ui-press hr-icon"></i>
                    <span class="hr-simple right"></span>
                </div>
                <div class="error-content">
                    <h2>404</h2>
                    <h3>Oops! Looks like something going rong</h3>
                    <p>We can’t seem to find the page you’re looking for make sure that you have typed the currect URL</p>
                    <a class="btn btn-theme btn-wide" href="index.html">Go to home</a>
                </div>
            </div>
            <!-- Title Content End -->

        </div>
    </div>
</div>
<!-- Service End   -->

                      
<!--  Newsletter Start  -->
    @include("partials/app.app_newsletter")
<!-- Newsletter End   -->

@endsection

@section('footer')
    @include("partials/app.app_footer")
@endsection


@section('menu')
    @include("partials/app.app_menu")
@endsection