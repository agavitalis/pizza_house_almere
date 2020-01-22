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
            <h2>Search</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                <li class="list-inline-item"><a href="#">Search</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Search Start -->
<div class="shop">
    <div class="container">
        <div class="row">
            <!-- Title Content Start -->
            <div class="col-sm-12 commontop text-center">
                <h4 class="mt-0">Search Result</h4>
                <div class="divider style-1 center">
                    <span class="hr-simple left"></span>
                    <i class="icofont icofont-ui-press hr-icon"></i>
                    <span class="hr-simple right"></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
            </div>
            <!-- Title Content End -->

            <div class="col-sm-12 mainpage">
                <!-- Product View Start -->
                <div class="row sort">
                    <!-- Product Short Start -->
                    <div class="col-md-4">
                        <div class="form-group input-group input-group-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-addon" for="input-sort">Sort By :    </label>
                            </div>
                            <select id="input-sort" class="form-control selectpicker bs-select-hidden">
                                <option value="" selected="selected">Newest</option>
                                <option value="">Trending</option>
                                <option value="">Best Seller</option>
                                <option value="">Low to High</option>
                                <option value="">High to Low</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group input-group input-group-sm">
                            <div class="input-group-prepend">
                                <label class="input-group-addon" for="input-sort">Show :    </label>
                            </div>
                            <select id="input-show" class="form-control selectpicker bs-select-hidden">
                                <option value="" selected="selected">Default</option>
                                <option value="">1</option>
                                <option value="">5</option>
                                <option value="">15</option>
                                <option value="">20</option>
                                <option value="">25</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 list d-sm-none d-md-block text-right">
                        <div class="btn-group" role="group" aria-label="...">
                            <button type="button" id="grid-view" class="btn btn-theme-alt btn-md btngrid" data-toggle="tooltip" title="Grid"><i class="icofont icofont-brand-microsoft"></i></button>
                            <button  type="button" id="list-view" class="btn btn-theme-alt btn-md btngrid" data-toggle="tooltip" title="List"><i class="icofont icofont-listine-dots"></i></button>
                        </div>
                    </div>
                    <!-- Product Short End -->
                </div>

                <div class="row">
                    <!-- Product List Start -->
                    <!-- Single Product Start -->
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
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
                    <!-- Single Product Start -->
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/04.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/05.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/06.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/07.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/08.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
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
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb">
                            <div class="image">
                                <a class="link" href="shop-details.html"><img src="assets/images/shop/09.jpg" alt="Food image" title="Food image" class="img-fluid" /></a>
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
                    <!-- Product List End -->
                </div>

                <div class="row">
                    <div class="col-sm-12 col-xs-12 text-center">
                        <!-- Pagination Start -->
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous"><i class="icofont icofont-double-left"></i></a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">01</a> 
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">02</a> 
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">03</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">04</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">...</a> 
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">18</a> 
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next"><i class="icofont icofont-double-right"></i></a>
                            </li>
                        </ul>
                        <!-- Pagination End -->
                    </div>
                </div>
                <!-- Product View End -->
            </div>
        </div>
    </div>
</div>
<!-- Search End -->

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