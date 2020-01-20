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
            <h2>Food Menu</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                <li class="list-inline-item"><a href="#">Food Menu</a></li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Popular Dishes Start -->
<div class="dishes no-border">
    <div class="container">
        <div class="row">
            <!-- Title Content Start -->
            <div class="col-sm-12 commontop text-center">
                <h4>Our Popular Dishes</h4>
                <div class="divider style-1 center">
                    <span class="hr-simple left"></span>
                    <i class="icofont icofont-ui-press hr-icon"></i>
                    <span class="hr-simple right"></span>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
            </div>
            <!-- Title Content End -->
            <div class="col-sm-12">
                <div class="dish owl-carousel">
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/01.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/02.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/03.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/04.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/05.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/01.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/02.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/03.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/04.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="assets/images/dishes/05.jpg" alt="image" title="image" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>Dish Name Here</h4>
                                <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                <p>$100</p>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Dishes End -->

<!-- Breakfast Menu Start -->
<div class="menu menu-2 gray-bg">
    <div class="menu-inner">
        <div class="container">
            <div class="row ">
                <!-- Title Content Start -->
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>Breakfast Menu</h4>
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="icofont icofont-ui-press hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breakfast Menu End -->

<!-- Lunch Menu Start -->
<div class="menu menu-2 white-bg">
    <div class="menu-inner">
        <div class="container">
            <div class="row ">
                <!-- Title Content Start -->
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>Lunch Menu</h4>
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="icofont icofont-ui-press hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lunch Menu End -->

<!-- Dinner Menu Start -->
<div class="menu menu-2 gray-bg">
    <div class="menu-inner">
        <div class="container">
            <div class="row ">
                <!-- Title Content Start -->
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>Dinner Menu</h4>
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="icofont icofont-ui-press hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-sm-12 col-xs-12">                                                       
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/09.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                    </div>                                                     
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dinner Menu End -->

<!-- Drinks Menu Start -->
<div class="menu menu-2 white-bg">
    <div class="menu-inner">
        <div class="container">
            <div class="row ">
                <!-- Title Content Start -->
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>Drinks Menu</h4>
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="icofont icofont-ui-press hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-sm-12 col-xs-12">                                                                                   
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/06.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Drinks Menu End -->

<!-- Others Menu items Start -->
<div class="menu menu-2 gray-bg">
    <div class="menu-inner">
        <div class="container">
            <div class="row ">
                <!-- Title Content Start -->
                <div class="col-sm-12 col-xs-12 commontop text-center">
                    <h4>Others Items</h4>
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="icofont icofont-ui-press hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-sm-12 col-xs-12">                                                       
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/07.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/02.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/01.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/04.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/05.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/08.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/09.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Box Start -->
                            <diV class="box">
                                <div class="image">
                                    <img src="assets/images/our-menu/03.jpg" alt="image" title="image" class="img-responsive" />
                                </div>
                                <div class="caption">
                                    <h4>Food Title Here</h4>
                                    <p class="des">Cursus / Dictum / Risus</p>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting industry.</span>
                                    <div class="price">$35.00</div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Others Menu items End -->

<!-- Reservation Start -->
<div class="reservation">
    <div class="container">
        <div class="row ">
            <!-- Title Content Start -->
            <div class="col-sm-12 commontop white text-center">
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


       