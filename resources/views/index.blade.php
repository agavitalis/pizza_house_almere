@extends('layouts.app')

@section('content')
<div class="wrapper">
    <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
           <![endif]-->

    <!-- Loader Start -->
    <div class="loader">
        <div class="loader-inner">
            <h4>Cooking in progress..</h4>
            <div id="cooking">
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div class="bubble"></div>
                <div id="area">
                    <div id="sides">
                        <div id="pan"></div>
                        <div id="handle"></div>
                    </div>
                    <div id="pancake">
                        <div id="pastry"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Loader End -->

    <!--  Header Start  -->
    <header>
        <!--Top Header Start -->
        <div class="top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <ul class="list-inline float-left icon">
                            <li class="list-inline-item"><a href="#"><i class="icofont icofont-phone"></i> Hotline : 123
                                    456 7890</a></li>
                        </ul>
                        <!-- Header Social Start -->
                        <ul class="list-inline float-right icon">
                            <li class="list-inline-item"><a href="shopping-cart.html"><i
                                        class="icofont icofont-cart-alt"></i> Cart</a></li>
                            <li class="list-inline-item dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="icofont icofont-ui-user"></i> My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right drophover"
                                    aria-labelledby="dropdownMenuLink">
                                    <li class="dropdown-item"><a href="login.html">Login</a></li>
                                    <li class="dropdown-item"><a href="register.html">Register</a></li>
                                </ul>
                            </li>
                            <li class="list-inline-item">
                                <ul class="list-inline social">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/spheretheme/"
                                            target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/spheretheme/"
                                            target="_blank"><i class="icofont icofont-social-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                                class="icofont icofont-social-instagram"></i></a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Header Social End -->
                    </div>
                </div>
            </div>
        </div>
        <!--Top Header End -->

        <div class="container">
            <div class="row">

                <div class="col col-md-9 col-sm-8 col-xs-8" style="display:flex">
                    <!-- Logo Start  -->
                    <div id="logo">
                        <a href="index.html">
                            <img id="logo_img" class="img-fluid" src="{{ asset('app_assets/images/logo/logo.png') }}"
                                alt="Logo Me" title="logo" />
                        </a>
                    </div>
                    <!-- Logo End  -->
                </div>


                <!-- <div class="col col-md-7 col-sm-4 col-xs-4"> -->
                <!-- Main Menu Start  -->
                <!-- <div id="menu">	
                                <nav class="navbar navbar-expand-md">
                                    <div class="navbar-header">
                                        
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggler" type="button"><i class="icofont icofont-navigation-menu"></i></button>
                                    </div>
                                    <div class="collapse navbar-collapse navbar-ex1-collapse padd0">
                                        <ul class="nav navbar-nav">
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="index-1.html">Home Page One</a></li>
                                                            <li><a href="index-2.html">Home page Two</a></li>
                                                            <li><a href="index-3.html">home page Three</a></li>
                                                            <li><a href="index-onepage.html">One Page</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Menu</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="menu.html">Menu Options 1</a></li>
                                                            <li><a href="menu-2.html">Menu Options 2</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a href="about.html">about us</a></li>
                                            <li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">contact us</a>
                                                <div class="dropdown-menu">
                                                    <div class="dropdown-inner">
                                                        <ul class="list-unstyled">
                                                            <li><a href="contact-us.html">contact us 1</a></li>
                                                            <li><a href="contact-us-2.html">contact us 2</a></li>
                                                            <li><a href="contact-us-3.html">contact us 3</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div> -->
                <!-- Main Menu End -->
                <!-- </div> -->
                <div class="col col-md-3 col-sm-4 col-xs-4 button-top paddleft">
                    <a class="btn-primary btn" href='reservation.html'>Place your Order</a>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End   -->

    <!-- Banner Start -->
    <div class="banner-bg">
        <div class="video-bg"
            data-property="{videoURL:'https://youtu.be/95SNbn340TE',containment:'.banner-bg',autoPlay:true, mute:true, startAt:0, opacity:1}">
        </div>
        <!-- Banner Detail Start  -->
        <div class="banner-detail">
            <div class="container">

                <div class="cd-headline clip">
                    <h4>LOVES <span class="cd-words-wrapper">
                            <b class="is-visible">HEALTHY</b>
                            <b>QUALITY</b>
                            <b>TESTY</b>
                        </span>FOOD</h4>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit
                    erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.
                </p>
                <a class="btn-primary btn btn-wide" href="#">Today's menu</a>
            </div>
        </div>
        <!-- Banner Detail End  -->
    </div>
    <!-- Banner End  -->

    <!-- Order Start  -->
    <div class="order">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Title Content Start -->
                <div class="col-sm-12 commontop text-center">
                    <h4>Order Delivery and take out</h4>
                    <div class="divider style-1 center">
                        <span class="hr-simple left"></span>
                        <i class="icofont icofont-ui-press hr-icon"></i>
                        <span class="hr-simple right"></span>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in
                        suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget
                        lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-lg-7 col-sm-12">
                    <!-- Search Form Start -->
                    <form class="form-horizontal search-icon" method="post">
                        <fieldset>
                            <div class="form-group">
                                <input name="s" value="" placeholder="Search keyword" class="form-control" type="text">
                            </div>
                            <button type="submit" value="submit" class="btn btn-theme"><i
                                    class="icofont icofont-search"></i>Search</button>
                        </fieldset>
                    </form>
                    <!-- Search Form End -->
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <i class="icofont icofont-fast-food"></i>
                            <p>Select Food</p>
                        </li>
                        <li class="list-inline-item">
                            <i class="icofont icofont-food-basket"></i>
                            <p>Order Food</p>
                        </li>
                        <li class="list-inline-item">
                            <i class="icofont icofont-fast-delivery"></i>
                            <p>Delivery or Take Out</p>
                        </li>
                    </ul>
                    <img src="{{ asset('app_assets/images/lines.png') }}" alt="line" title="line" class="img-fluid" />
                </div>
            </div>
        </div>
    </div>
    <!-- Order End  -->

    <!-- Popular Dishes Start -->
    <div class="dishes">
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in
                        suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget
                        lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-sm-12">
                    <div class="dish owl-carousel">
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/01.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/02.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                                <div class="form-group col-xs-12 col-md-12">
                                    <div class="text-center">
                                        <button class="btn btn-theme btn-sm">+<i
                                                class="icofont icofont-cart-alt"></i></i>Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/03.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/04.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/05.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/01.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/02.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/03.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/04.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
                                    <p>$100</p>
                                </div>
                            </div>
                            <!-- Box End -->
                        </div>
                        <div class="item">
                            <!-- Box Start -->
                            <div class="box">
                                <a href="#"><img src="{{ asset('app_assets/images/dishes/05.jpg') }}" alt="image"
                                        title="image" class="img-fluid" /></a>
                                <div class="caption">
                                    <h4>Dish Name Here</h4>
                                    <span>Lorem ipsum is simply dummy text of the printing and type setting
                                        industry.</span>
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

    <!-- Food Menu Start -->
    <div class="menu">
        <div class="menu-inner">
            <div class="container">
                <div class="row ">
                    <!-- Title Content Start -->
                    <div class="col-sm-12 col-xs-12 commontop text-center">
                        <h4>Our Menu</h4>
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="icofont icofont-ui-press hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in
                            suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget
                            lobortis nulla.</p>
                    </div>
                    <!-- Title Content End -->
                    <div class="col-sm-12 col-xs-12">
                        <!--  Menu Tabs Start  -->
                        <ul class="nav nav-tabs list-inline">
                            <li class="nav-item">
                                <a class="nav-link active" href="#all" data-toggle="tab" aria-expanded="true">all</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#breakfast" data-toggle="tab"
                                    aria-expanded="false">breakfast</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#lunch" data-toggle="tab" aria-expanded="false">lunch</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#dinner" data-toggle="tab" aria-expanded="false">dinner</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#drinks" data-toggle="tab" aria-expanded="false">drinks</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#others" data-toggle="tab" aria-expanded="false">others</a>
                            </li>
                        </ul>
                        <!--  Menu Tabs Start  -->

                        <!--  Menu Tabs Content Start  -->
                        <div class="tab-content">
                            <!--  Menu Tab Start  -->
                            <div class="tab-pane show active" id="all">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/01.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">
                                                    <div class="text-center">$35.00</div>
                                                    <div class="text-center mt-3">
                                                        <button type="submit" class="btn btn-theme btn-sm">+<i
                                                                class="icofont icofont-cart-alt"> <span
                                                                    class="d-sm-block d-md-none text-white">Add to
                                                                    Cart</span></i></button>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/04.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/07.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/02.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/05.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/08.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/03.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/06.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                </div>
                            </div>
                            <!--  Menu Tab End  -->

                            <!--  Menu Tab Start  -->
                            <div class="tab-pane" id="breakfast">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <div class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/07.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/02.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/01.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/04.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/05.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/06.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/09.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/08.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                </div>
                            </div>
                            <!--  Menu Tab End  -->

                            <!--  Menu Tab Start  -->
                            <div class="tab-pane" id="lunch">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/01.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/04.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/07.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/02.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/05.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/08.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/03.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/06.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                </div>
                            </div>
                            <!--  Menu Tab End  -->

                            <!--  Menu Tab Start  -->
                            <div class="tab-pane" id="dinner">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/07.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/02.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/01.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/04.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/05.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/08.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/03.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/09.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                </div>
                            </div>
                            <!--  Menu Tab End  -->

                            <!--  Menu Tab Start  -->
                            <div class="tab-pane" id="drinks">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/01.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/04.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/07.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/02.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/05.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/08.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/03.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/06.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                </div>
                            </div>
                            <!--  Menu Tab End  -->

                            <!--  Menu Tab Start  -->
                            <div class="tab-pane" id="others">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/07.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/02.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/01.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/04.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/05.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/08.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/09.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box">
                                            <div class="image">
                                                <img src="{{ asset('app_assets/images/our-menu/03.jpg') }}" alt="image"
                                                    title="image" class="img-fluid" />
                                            </div>
                                            <div class="caption">
                                                <h4>Food Title Here</h4>
                                                <p class="des">Cursus / Dictum / Risus</p>
                                                <span>Lorem ipsum is simply dummy text of the printing and type setting
                                                    industry.</span>
                                                <div class="price">$35.00</div>
                                            </div>
                                        </div>
                                        <!-- Box End -->
                                    </div>
                                </div>
                            </div>
                            <!--  Menu Tab End  -->
                        </div>
                        <!--  Menu Tabs Content End  -->
                        <div class="text-center padbot30">
                            <a class="btn btn-theme-alt btn-wide" href='menu.html'>view more <i
                                    class="icofont icofont-curved-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Food Menu End -->

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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in
                        suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget
                        lobortis nulla.</p>
                </div>
                <!-- Title Content End -->
                <div class="col-md-12 col-xs-12">
                    <!-- Reservation Form Start -->
                    <form action="https://www.spheretheme.com/html/steam/mailer.php" method="post"
                        class="row reservation-form" novalidate="novalidate">
                        <div class="form-group col-md-4 col-sm-6">
                            <i class="icofont icofont-ui-user"></i><input name="name" placeholder="name" id="input-name"
                                class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <i class="icofont icofont-ui-message"></i><input name="email" placeholder="email"
                                id="input-email" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <i class="icofont icofont-phone"></i><input name="mobile" placeholder="mobile number"
                                id="input-mobile" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <i class="icofont icofont-ui-calendar"></i><input name="date" placeholder="date"
                                id="input-date" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <i class="icofont icofont-clock-time"></i><input name="time" placeholder="time"
                                id="input-time" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <i class="icofont icofont-users"></i><input name="persons" placeholder="number of persons"
                                id="input-persons" class="form-control" type="text" required>
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

    <!-- Newsletter Start -->
    <div id="newsletter">
        <div class="container">
            <div id="subscribe">
                <!-- Subscribe Form -->
                <form class="form-horizontal" name="subscribe">
                    <div class="row">
                        <div class="col-sm-6 col-md-7">
                            <div class="input-group">
                                <span class="news">newsletter</span>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam iaculis lorem augue, at
                                    quam finibus eget.</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 form-group">
                            <div class="input-group">
                                <input value="" name="subscribe_email" id="subscribe_email" placeholder="Email"
                                    type="text">
                                <button class="btn btn-news" type="submit" value="submit">Send</button>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Subscribe Form -->
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Footer Start -->
    <footer>
        <div class="container">
            <div class="row inner">
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Footer Widget Start -->
                    <h5>Contact Us</h5>
                    <ul class="list-unstyled contact">
                        <li><i class="icofont icofont-social-google-map"></i> 20, floor, Restaurant Food & Drinks, Nr,
                            Queenslad Victoria Building, USA</li>
                        <li><i class="icofont icofont-phone"></i> 1800 000 0000,<br>+88 123 1234 1234</li>
                        <li><a href="#"><i class="icofont icofont-ui-message"></i>info@yourdomainname.com</a></li>
                    </ul>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Footer Widget Start -->
                    <h5>Information</h5>
                    <ul class="list-unstyled">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Sitemap</a></li>
                    </ul>
                    <!-- Footer Widget End -->
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <!-- Footer Widget Start -->
                    <h5>Open Hours</h5>
                    <ul class="list-unstyled">
                        <li>Monday - Friday : 9 am to 12 am.</li>
                        <li>Saturday - Sunday : 24 Hour Open</li>
                        <li>Breakfast : 7 am to 12 pm</li>
                        <li>Lunch : 12 pm to 7 pm</li>
                        <li>Dinner : 7 am to 12 am</li>
                    </ul>
                    <!-- Footer Widget End -->
                </div>

            </div>

        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row powered">
                    <!--  Copyright Start -->
                    <div class="col-md-3 col-sm-6 order-md-1">
                        <img src="{{ asset('app_assets/images/logo/logo-white.png') }}" class="img-fluid" title="logo"
                            alt="logo">
                    </div>
                    <div class="col-md-3 col-sm-6 text-right order-md-3">
                        <!--  Footer Social Start -->
                        <ul class="list-inline social">
                            <li class="list-inline-item"><a href="https://www.facebook.com/spheretheme/"
                                    target="_blank"><i class="icofont icofont-social-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="https://twitter.com/spheretheme/" target="_blank"><i
                                        class="icofont icofont-social-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="https://plus.google.com/" target="_blank"><i
                                        class="icofont icofont-social-google-plus"></i></a></li>
                            <li class="list-inline-item"><a href="https://in.pinterest.com/" target="_blank"><i
                                        class="icofont icofont-social-pinterest"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank"><i
                                        class="icofont icofont-social-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="https://www.youtube.com/" target="_blank"><i
                                        class="icofont icofont-social-youtube-play"></i></a></li>
                        </ul>
                        <!--  Footer Social End -->
                    </div>
                    <div class="col-md-6 col-sm-12 text-center order-md-2">
                        <p>Copyright © <span>Steam Restaurant & Drinks</span> 2018. All Rights Reserved.</p>
                    </div>
                    <!--  Copyright End -->
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End  -->

    <!-- Switch Style Start -->
    @yield('menu')
    <div class="style-customizer closed">
        <a class="opener" href="#"><i class="icofont icofont-navigation-menu"></i></a>
        <div class="buy-button">
            <a href="index.html" class="customizer-logo">
                <img src="{{ asset('app_assets/images/logo/logo-gray.png') }}" alt="Theme Logo">
            </a>
            <div class="buy-now">
                <a class="btn btn-theme btn-md" target="new"
                    href="https://themeforest.net/item/steam-restaurant-food-drinks-html-5-website-template/21212196">Buy
                    now!</a>
            </div>
        </div>
        <div class="clearfix content-chooser">
            <h3>Layout Options</h3>
            <p>Which layout option you want to use?</p>
            <ul class="layoutstyle clearfix">
                <li class="wide-layout selected" data-style="wide-layout" title="wide"> Wide </li>
                <li class="boxed-layout" data-style="boxed-layout" title="boxed"> Boxed </li>
            </ul>
            <h3>Color Schemes</h3>
            <p>Which theme color you want to use? Select from here.</p>
            <ul class="styleChange clearfix">
                <li class="skin-default selected" title="skin-default" data-style="skin-default"></li>
                <li class="color-1" title="color-1" data-style="color-1"></li>
                <li class="color-2" title="color-2" data-style="color-2"></li>
                <li class="color-3" title="color-3" data-style="color-3"></li>
                <li class="color-4" title="color-4" data-style="color-4"></li>
                <li class="color-5" title="color-5" data-style="color-5"></li>
                <li class="color-6" title="color-6" data-style="color-6"></li>
                <li class="color-7" title="color-7" data-style="color-7"></li>
                <li class="color-8" title="color-8" data-style="color-8"></li>
                <li class="color-9" title="color-9" data-style="color-9"></li>
                <li class="color-10" title="color-10" data-style="color-10"></li>
                <li class="color-11" title="color-11" data-style="color-11"></li>
            </ul>
            <h3>Header Style</h3>
            <p>Which Header Style you want to use? Select from here.</p>
            <ul class="headerChange clearfix">
                <li class="header-0" data-style="header-0" title="Default Header">0</li>
                <li class="header-1" data-style="header-1" title="Header Color">1</li>
                <li class="header-2" data-style="header-2" title="Sticky Header">2</li>
            </ul>
            <h3>Background Style</h3>
            <p>Which background Style you want to use? Select from here.</p>
            <ul class="backgroundChange clearfix">
                <li class="main-bg-1" data-style="main-bg-1" title="Background 1"></li>
                <li class="main-bg-2" data-style="main-bg-2" title="Background 2"></li>
                <li class="main-bg-3" data-style="main-bg-3" title="Background 3"></li>
                <li class="main-bg-4" data-style="main-bg-4" title="Background 4"></li>
                <li class="main-bg-5" data-style="main-bg-5" title="Background 5"></li>
                <li class="main-bg-6" data-style="main-bg-6" title="Background 6"></li>
                <li class="main-bg-7" data-style="main-bg-7" title="Background 7"></li>
                <li class="main-bg-8" data-style="main-bg-8" title="Background 8"></li>
            </ul>

            <ul class="resetAll">
                <li><a class="btn btn-theme btn-md btn-block button-reset" href="#">Reset All</a></li>
            </ul>
        </div>
    </div>
    <!-- Switch Style End -->

</div>

@endsection