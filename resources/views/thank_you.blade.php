@extends('layouts.app')

@section('content')
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!--  Header Start  -->
@include("partials/app.app_header")
<!-- Header End   -->

<!-- Breadcrumb Start -->
<div class="bread-crumb">
    <div class="container">
        <div class="matter">
            <h2>Thank You</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                <li class="list-inline-item"><a href="#">Thank You</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Service Start  -->
<div class="page-not-found">
    <div class="container">
        <div class="row ">
            <!-- Title Content Start -->
            <div class="col-sm-12 col-xs-12 commontop text-center">
                <h4>Thank You</h4>
                <div class="divider style-1 center">
                    <span class="hr-simple left"></span>
                    <i class="icofont icofont-ui-press hr-icon"></i>
                    <span class="hr-simple right"></span>
                </div>
                <div class="thanks-content">
                    <h3><i class="icofont icofont-tick-mark"></i> Congratulations. <br>Your order was Completed Successfully.</h3>
                    <p><strong>Hi {{Auth::user()->first_name}},</strong></p>
                    <p>We have received your order.<br> We will send you an Email and SMS the moment your order items are dispatched to your address.</p>
                    <p>Your Order ID: <strong>9428575331</strong></p>
                    <a class="btn btn-danger btn-wide" href="index.html">Go to home</a>
                    <a class="btn  btn-success btn-wide" href="index.html">Print Recipts</a>
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