@extends('layouts.app')

@section('content')
<!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]--> 

<!-- Loader Start -->
@include("partials/app.app_loader")
<!-- Loader End -->

<!-- Breadcrumb Start -->
<div class="bread-crumb">
    <div class="container">
        <div class="matter">
            <h2>Product Details</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                <li class="list-inline-item"><a href="#">Product Details</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Shop Start -->
<div class="shop">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- Left Filter Start -->
                <div class="left-side">
                    <h4>SEARCH FILTERS</h4>
                    <div class="search">
                        <!-- Search Filter Start -->
                        <form class="form-horizontal" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input name="s" value="" class="form-control" placeholder="Search Food" type="text">
                                    <button type="submit" value="submit" class="btn"><i class="icofont icofont-search"></i></button>
                                </div>
                                <ul class="list-unstyled">
                                    <li>
                                        <label class="check">
                                            <input type="radio" name="payment" class="checkclass"/>
                                            Sandwiches
                                        </label>
                                    </li>
                                    <li>
                                        <label class="check">
                                            <input type="radio" name="payment" class="checkclass"/>
                                            Fast Food
                                        </label>
                                    </li>
                                    <li>
                                        <label class="check">
                                            <input type="radio" name="payment" class="checkclass"/>
                                            Vegetarian
                                        </label>
                                    </li>
                                    <li>
                                        <label class="check">
                                            <input type="radio" name="payment" class="checkclass"/>
                                            Thai
                                        </label>
                                    </li>
                                    <li>
                                        <label class="check">
                                            <input type="radio" name="payment" class="checkclass"/>
                                            Non Veg
                                        </label>
                                    </li>
                                    <li>
                                        <label class="check">
                                            <input type="radio" name="payment" class="checkclass"/>
                                            Salads
                                        </label>
                                    </li>
                                </ul>
                            </fieldset>
                        </form>
                        <!-- Search Filter End -->
                    </div>
                    <div class="food">
                        <h3>Food For</h3>
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    Delivery
                                </label>
                            </li>
                            <li class="list-inline-item">
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    Pickup
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="popular">
                        <!-- Tag Filter Start -->
                        <h3>popular tags <a href="#" class="pull-right"><i class="icofont icofont-plus"></i></a></h3>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#">Service <i class="icofont icofont-close"></i></a></li>
                            <li class="list-inline-item"><a href="#">Cookies <i class="icofont icofont-close"></i></a></li>
                            <li class="list-inline-item"><a href="#">Pizza <i class="icofont icofont-close"></i></a></li>
                            <li class="list-inline-item"><a href="#">Tandoori Chicken <i class="icofont icofont-close"></i></a></li>
                            <li class="list-inline-item"><a href="#">Cupcake <i class="icofont icofont-close"></i></a></li>
                            <li class="list-inline-item"><a href="#">Burger <i class="icofont icofont-close"></i></a></li>
                        </ul>
                        <!-- Tag Filter End -->
                    </div>
                    <div class="rating">
                        <!-- Rating Filter Start -->
                        <h3>Rating</h3>
                        <ul class="list-unstyled">
                            <li>
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </label>
                            </li>
                            <li>
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </label>
                            </li>
                            <li>
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </label>
                            </li>
                            <li>
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </label>
                            </li>
                            <li>
                                <label class="check">
                                    <input type="radio" name="payment" class="checkclass"/>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </label>
                            </li>
                        </ul>
                        <!-- Rating Filter End -->
                    </div>
                </div>
                <!-- Left Filter End -->
            </div>

            <div class="col-md-9">
                <div class="row shopdetail">
                    <div class="col-sm-5 col-xs-12">
                        <div class="image">
                            <img src="assets/images/shop/details.jpg" title="thumb image" alt="thumb image" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <h2>Product Title Here</h2>
                        <div class="rating">
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                            <i class="icofont icofont-star"></i>
                        </div>
                        <div class="price">$23.00</div>
                        <p class="des">Cursus / Dictum / Risus</p>
                        <p class="shortdes">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat.</p>
                        <div class="food">
                            <h3>Food For</h3>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <label class="check">
                                        <input type="radio" name="payment" class="checkclass"/>
                                        Delivery
                                    </label>
                                </li>
                                <li class="list-inline-item">
                                    <label class="check">
                                        <input type="radio" name="payment" class="checkclass" checked="checked"/>
                                        Pickup
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="common">
                            <p class="qtypara float-left">
                                <span id="minus1" class="minus"><i class="icofont icofont-minus"></i></span>
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity1" class="form-control qty">
                                <span id="add1" class="add"><i class="icofont icofont-plus"></i></span>
                                <input type="hidden" name="product_id" value="1">
                            </p>
                            <div class="buttons">
                                <a href="shopping-cart.html" class="btn btn-theme-alt btn-md">Order Now</a>
                                <a href="shopping-cart.html" class="btn btn-theme-alt btn-md">Add to cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-xs-12">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" href="#tab-description" data-toggle="tab">description</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-review" data-toggle="tab">Reviews (3)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#tab-add" data-toggle="tab">add Review</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-description">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Duis aute irure dolor inreprehenderit in voluptate velit esse cillum d. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Duis aute irure dolor inreprehenderit in voluptate velit esse cillum d. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>                                           
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enimad minim veniam, quis nostrud exercitation ullamco laboris nisi utaliquip ex ea commodo consequat. Duis aute irure dolor inreprehenderit in voluptate velit esse cillum d. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                            <div class="tab-pane" id="tab-review">
                                <div class="box">
                                    <img src="assets/images/blog-detail/01.jpg" alt="image" title="image" class="img-fluid"/>
                                    <div class="detail">
                                        <h2>John Doe</h2>
                                        <span>2 days ago</span>
                                        <div class="rating">
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <img src="assets/images/blog-detail/02.jpg" alt="image" title="image" class="img-fluid"/>
                                    <div class="detail">
                                        <h2>John Doe</h2>
                                        <span>2 days ago</span>
                                        <div class="rating">
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <img src="assets/images/blog-detail/01.jpg" alt="image" title="image" class="img-fluid"/>
                                    <div class="detail">
                                        <h2>John Doe</h2>
                                        <span>2 days ago</span>
                                        <div class="rating">
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                            <i class="icofont icofont-star"></i>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-add">
                                <form class="form-horizontal" id="form-review">
                                    <div class="form-group row required">
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="name" placeholder="Name*" id="input-name" class="form-control" />
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <input type="text" name="email" placeholder="Email*" id="input-email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group row required">
                                        <div class="col-sm-12">
                                            <textarea name="text" rows="5" id="input-review" placeholder="Your Reviews*" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-12">
                                            <div class="rating">
                                                <p>Your Rating*</p>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                                <i class="icofont icofont-star"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="buttons clearfix">
                                        <button type="submit" id="button-review" class="btn btn-theme btn-wide">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <!-- Title Content Start -->
                    <div class="col-sm-12 commontop text-center">
                        <h4>Related Food</h4>
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="icofont icofont-ui-press hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                    </div>
                    <!-- Title Content End -->

                    <!-- Single Product Start -->
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/01.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
                                <div class="hoverbox">
                                    <a class="btn btn-theme btn-md" href="shopping-cart.html">Add To Cart</a>
                                </div>
                            </div>
                            <div class="caption">
                                <h4>Food Title Here</h4>
                                <div class="rating">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <div class="price">$23.00</div>
                                <p class="des">Cursus / Dictum / Risus</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eleifend erat, vitae aliquam metus. Donec orci tellus, rhoncus eget ipsum tempus, dignissim rutrum enim. Integer interdum sapien nec tempus luctus.</p>
                                <p><a class="btn btn-theme btn-md" href="shopping-cart.html">Add To Cart</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/02.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
                                <div class="hoverbox">
                                    <a class="btn btn-theme btn-md" href="shopping-cart.html">Add To Cart</a>
                                </div>
                            </div>
                            <div class="caption">
                                <h4>Food Title Here</h4>
                                <div class="rating">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <div class="price">$23.00</div>
                                <p class="des">Cursus / Dictum / Risus</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eleifend erat, vitae aliquam metus. Donec orci tellus, rhoncus eget ipsum tempus, dignissim rutrum enim. Integer interdum sapien nec tempus luctus.</p>
                                <p><a class="btn btn-theme btn-md" href="shopping-cart.html">Add To Cart</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                    <!-- Single Product Start -->
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/03.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
                                <div class="hoverbox">
                                    <a class="btn btn-theme btn-md" href="shopping-cart.html">Add To Cart</a>
                                </div>
                            </div>
                            <div class="caption">
                                <h4>Food Title Here</h4>
                                <div class="rating">
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                    <i class="icofont icofont-star"></i>
                                </div>
                                <div class="price">$23.00</div>
                                <p class="des">Cursus / Dictum / Risus</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eleifend erat, vitae aliquam metus. Donec orci tellus, rhoncus eget ipsum tempus, dignissim rutrum enim. Integer interdum sapien nec tempus luctus.</p>
                                <p><a class="btn btn-theme btn-md" href="shopping-cart.html">Add To Cart</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Product End -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop End -->

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