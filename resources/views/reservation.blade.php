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
                        <h2>Reservation</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.html">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Reservation</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Reservation Start -->
            <div class="reservation no-bg">
                <div class="container">
                    <div class="row ">
                        <!-- Title Content Start -->
                        <div class="col-sm-12 commontop text-center">
                            <h4>Book Your Table</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                        </div>
                        <!-- Title Content End -->
                        <div class="col-md-12 col-xs-12">
                            <!-- Reservation Form Start -->
                            <form action="https://www.spheretheme.com/html/steam/mailer.php" method="post" class="row reservation-form" novalidate="novalidate">
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-user"></i><input name="name" placeholder="name" id="input-name" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-message"></i><input name="email" placeholder="email" id="input-email" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-phone"></i><input name="mobile" placeholder="mobile number" id="input-mobile" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-ui-calendar"></i><input name="date" placeholder="date" id="input-date" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-clock-time"></i><input name="time" placeholder="time" id="input-time" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-md-4 col-sm-6">
                                    <i class="icofont icofont-users"></i><input name="persons" placeholder="number of persons" id="input-persons" class="form-control" type="text" required>
                                </div>
                                <div class="form-group col-xs-12 col-md-12">
                                    <div class="">  
                                        <div id="emailSend" class="alert alert-success" role="alert" style="display: none;">
                                            <div class="success-text">Your Message has been successfully sent.</div>
                                        </div>
                                        <div id="emailError" class="alert alert-danger" role="alert" style="display: none;">
                                            <div class="alert-text">Server error <br> Try again later.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-md-12">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-theme btn-wide">book now</button>
                                    </div>
                                </div>
                            </form>
                            <!-- Reservation Form End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Reservation End  -->

            <!-- Fun-Factor Start -->
            <div class="fun-factor">
                <div class="container">
                    <div class="row ">
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-spoon-and-fork"></i>
                                </span>
                                <h4 class="number" data-from="100" data-to="300" data-refresh-interval="10">100</h4>
                                <h3>MENU ITEMS</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-emo-simple-smile"></i>
                                </span>
                                <h4 class="number" data-from="100" data-to="600" data-refresh-interval="10">100</h4>
                                <h3>VISITOR EVERYDAY</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-waiter-alt"></i>
                                </span>
                                <h4 class="number" data-from="100" data-to="400" data-refresh-interval="10">100</h4>
                                <h3>EXPERT CHEF</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                        <div class="col-sm-3 col-6">
                            <!-- Fun-Factor Box Start -->
                            <div class="single-box">
                                <span>
                                    <i class="icofont icofont-heart-alt"></i>
                                </span>
                                <h4 class="number" data-from="10" data-to="100" data-refresh-interval="10">10</h4>
                                <h3>TEST & LOVE</h3>
                            </div>
                            <!-- Fun-Factor Box End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fun-Factor End -->

                       
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