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
                        <h2>Shopping Cart</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.html">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Shopping Cart</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Cart Start  -->
            <div class="mycart">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-sm-12">
                            
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link" href="#tab-cart" data-toggle="tab"><span>1</span>shopping cart</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#tab-info" data-toggle="tab"><span>2</span>shopping info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab-payment" data-toggle="tab"><span>3</span>payment method</a></li>
                            </ul>
                            <div class="bor"></div>
                            <div class="tab-content">
                               

                                <div class="tab-pane active col-md-12 col-12" id="tab-info">
                                    <form method="post" action="/shopping_payment" >	
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-5 col-md-6 col-12">
                                                <h6>Shopping Address</h6>
                                               
                                                    <fieldset>	
                                                        <div class="form-group">
                                                            <input name="country" value="" placeholder="Country" id="input-country" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="state" value="" placeholder="State" id="input-state" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="city" value="" placeholder="City" id="input-city" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="code" value="" placeholder="Zip Code" id="input-code" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="address" value="" placeholder="Address" id="input-address" class="form-control" type="text" required>
                                                        </div>
                                                    </fieldset>
                                               
                                            </div>

                                            <div class="col-lg-2 d-none d-lg-block"></div>
                                            <div class="col-lg-5 col-md-6 col-12">
                                                <h6>Contact information</h6>
                                              
                                                    <fieldset>	
                                                        <div class="form-group">
                                                            <input name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="email" value="" placeholder="Email" id="input-email" class="form-control" type="text" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <input name="phone" value="" placeholder="Phone Number" id="input-phone" class="form-control" type="text" required>
                                                        </div>
                                                    </fieldset>
                                                
                                            </div>
                                            <div class="col-md-12 col-12">
                                                <div class="buttons float-left">
                                                    <a href="#tab-cart" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Shopping Cart</a>
                                                </div>
                                                <div class="buttons float-right">
                                                    <button type="submit" class="btn btn-theme btn-md btn-wide">Continue</button>
                                                </div>
                                            </div>
                                            <div class='col-12 text-center'>
                                                <h5>Cart Number: {{$track_number}}</h5>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                               
                            </div>	
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cart End  -->

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