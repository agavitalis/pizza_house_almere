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
                                <li class="nav-item"><a class="nav-link active" href="#tab-cart" data-toggle="tab"><span>1</span>shopping cart</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab-info" data-toggle="tab"><span>2</span>shopping info</a></li>
                                <li class="nav-item"><a class="nav-link" href="#tab-payment" data-toggle="tab"><span>3</span>payment method</a></li>
                            </ul>
                            <div class="bor"></div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tab-cart">
                                    <form method="post" enctype="multipart/form-data">
                                        <h2>You have <span>2 items</span> in your order.</h2>
                                        <div class="table-responsive-md">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td class="text-center">Name</td>
                                                        <td class="text-center">Price</td>
                                                        <td class="text-center">Qty.</td>
                                                        <td class="text-center">Total</td>
                                                        <td></td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <a href="#">
                                                                <img src="assets/images/our-menu/01.jpg" class="img-fluid" alt="thumb" title="thumb" />
                                                            </a>
                                                            <div class="name">
                                                                <h4>Food Title Here</h4>
                                                                <p>Curses / Dictum / Risus</p>
                                                                <div class="rating">
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">$ 23.00</td>
                                                        <td class="text-center">
                                                            <p class="qtypara">
                                                                <span id="minus1" class="minus"><i class="icofont icofont-minus"></i></span>
                                                                <input type="text" name="quantity" value="1" size="2" id="input-quantity1" class="form-control qty" />
                                                                <span id="add1" class="add"><i class="icofont icofont-plus"></i></span>
                                                                <input type="hidden" name="product_id" value="1" />
                                                            </p>
                                                        </td>
                                                        <td class="text-center">$23.00</td>
                                                        <td class="text-center">
                                                            <button type="button"><i class="icofont icofont-close-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <a href="#">
                                                                <img src="assets/images/our-menu/01.jpg" class="img-fluid" alt="thumb" title="thumb" />
                                                            </a>
                                                            <div class="name">
                                                                <h4>Food Title Here</h4>
                                                                <p>Curses / Dictum / Risus</p>
                                                                <div class="rating">
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                    <i class="icofont icofont-star"></i>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">$23.50</td>
                                                        <td class="text-center">
                                                            <p class="qtypara">
                                                                <span id="minus2" class="minus"><i class="icofont icofont-minus"></i></span>
                                                                <input type="text" name="quantity" value="1" size="2" id="input-quantity2" class="form-control qty" />
                                                                <span id="add2" class="add"><i class="icofont icofont-plus"></i></span>
                                                                <input type="hidden" name="product_id" value="1" />
                                                            </p>
                                                        </td>
                                                        <td class="text-center">$23.50</td>
                                                        <td class="text-center">
                                                            <button type="button"><i class="icofont icofont-close-line"></i></button>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5">
                                                            <h3 class="text-right">SUBTOTAL - $46.50</h3>
                                                            <div class="buttons float-left">
                                                                <a href="shop.html" class="btn btn-theme btn-md btn-wide">Continue Shopping</a>
                                                            </div>
                                                            <div class="buttons float-right">
                                                                <a href="#tab-info" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Checkout</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </form>
                                </div>

                                <div class="tab-pane col-md-12 col-12" id="tab-info">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <h6>Shopping Address</h6>
                                            <form method="post" enctype="multipart/form-data">	
                                                <fieldset>	
                                                    <div class="form-group">
                                                        <input name="india" value="" placeholder="Country" id="input-india" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="state" value="" placeholder="State" id="input-state" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="City" value="" placeholder="City" id="input-City" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="code" value="" placeholder="Zip Code" id="input-code" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="address" value="" placeholder="Address" id="input-address" class="form-control" type="text">
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>

                                        <div class="col-lg-2 d-none d-lg-block"></div>
                                        <div class="col-lg-5 col-md-6 col-12">
                                            <h6>Contact information</h6>
                                            <form method="post" enctype="multipart/form-data">	
                                                <fieldset>	
                                                    <div class="form-group">
                                                        <input name="firstname" value="" placeholder="First Name" id="input-firstname" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="lastname" value="" placeholder="Last Name" id="input-lastname" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="email" value="" placeholder="Email" id="input-email" class="form-control" type="text">
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="phone" value="" placeholder="Phone Number" id="input-phone" class="form-control" type="text">
                                                    </div>
                                                </fieldset>
                                            </form>
                                        </div>
                                        <div class="col-md-12 col-12">
                                            <div class="buttons float-left">
                                                <a href="#tab-cart" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Shopping Cart</a>
                                            </div>
                                            <div class="buttons float-right">
                                                <a href="#tab-payment" data-toggle="tab" class="btn btn-theme btn-md btn-wide">Continue</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane col-md-12 col-12"  id="tab-payment">
                                    <form class="form-horizontal" method="post">
                                        <fieldset>
                                            <div class="form-group ">
                                                <ul class="list-inline text-center link">
                                                    <li class="list-inline-item active">
                                                        <a href="#"><img src="assets/images/shop/visacard.png" alt="visa" title="visa" class="img-fluid"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img src="assets/images/shop/master.png" alt="master" title="master" class="img-fluid"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img src="assets/images/shop/discovers.png" alt="discover" title="discover" class="img-fluid"></a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                        <a href="#"><img src="assets/images/shop/pay.png" alt="paypal" title="paypal" class="img-fluid"></a>
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