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
                                <li class="nav-item"><a class="nav-link" href="#tab-info" data-toggle="tab"><span>2</span>shopping info</a></li>
                                <li class="nav-item"><a class="nav-link active" href="#tab-payment" data-toggle="tab"><span>3</span>payment method</a></li>
                            </ul>
                            <div class="bor"></div>
                            <div class="tab-content">

                                <div class="tab-pane active col-md-12 col-12"  id="tab-payment">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <div class="form-group ">
                                                <ul class="list-inline text-center link">
                                                    <li class="list-inline-item active">
                                                        <a href="#"><img src="app_assets/images/shop/visacard.png" alt="visa" title="visa" class="img-fluid"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img src="app_assets/images/shop/master.png" alt="master" title="master" class="img-fluid"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img src="app_assets/images/shop/discovers.png" alt="discover" title="discover" class="img-fluid"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img src="app_assets/images/shop/pay.png" alt="paypal" title="paypal" class="img-fluid"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="form-group row">	
                                                <div class="col-sm-12">
                                                    <input class="form-control" id="input-card" placeholder="Card Holder Name" value="" name="holder" required="" type="text">
                                                </div>
                                            </div>	
                                            <div class="form-group row">	
                                                <div class="col-sm-12">
                                                    <input class="form-control" id="input-expiry" placeholder="Card Number" value="" name="card" required="" type="text">
                                                </div>
                                            </div>	
                                            <div class="form-group row">
                                                <label>Expiry Date</label>
                                                <div class="col-sm-4">
                                                    <input class="form-control" placeholder="Month" value="" name="month" required="" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-control" placeholder="Year" value="" name="Year" required="" type="text">
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="form-control" id="input-cvv" placeholder="cvv" value="" name="cvv" required="" type="text">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-12 col-12 text-center">
                                                    <div class="buttons">
                                                        <a href="#tab-cart" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Shopping Cart</a>
                                                        <a href="thank-you.html" class="btn btn-theme btn-md btn-wide">Place Order</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
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