@extends('layouts.app')

@section('content')

    <!--[if lt IE 8]>
               <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Loader Start -->
    
    <!-- Loader End -->

    <!--  Header Start  -->
    @include("partials/app.app_header")
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
                        @php
                            $count = 1
                        @endphp
                        @foreach($menus as $menu)
                            <li class="nav-item">
                                <a class="nav-link {{$count == 1? 'active':''}}" href="#{{$menu->id}}" data-toggle="tab" aria-expanded="{{$count == 1? 'true':'false'}}">{{$menu->menu_name}}</a>
                            </li>
                           
                            @php
                                $count ++
                            @endphp
                        @endforeach
                                                      
                        </ul>
                        <!--  Menu Tabs Start  -->

                        <!--  Menu Tabs Content Start  -->
                        <div class="tab-content">
                        @php
                            $tab_count = 1
                        @endphp
                        @foreach($complete_menu as $menu_tab)
                       
                            <!--  Menu Tab Start  -->
                            <div class="tab-pane {{$tab_count == 1? 'show active':''}}" id="{{$menu_tab['menu']->id}}">
                                <div class="row">
                                @foreach($menu_tab['menu_pizza'] as $menu_pizza)
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <!-- Box Start -->
                                        <diV class="box p-1">
                                            <div class="image">
                                                <img src="{{$menu_pizza->display_picture_path}}" 
                                                    title="image" height="125" width="125" />
                                            </div>
                                            <div class="caption">
                                                <h4>{{$menu_pizza->pizza_name}}</h4>
                                                <p class="des">Flavour: {{$menu_pizza->flavour}}</p>
                                                <span>{{$menu_pizza->pizza_description}}</span>
                                                <div class="price">
                                                    <div class="text-center">${{$menu_pizza->price}}</div>
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
                                @endforeach
                                
                                </div>
                            </div>
                            <!--  Menu Tab End  -->
                            @php
                                $tab_count ++
                            @endphp
                        @endforeach

                        </div>
                        <!--  Menu Tabs Content End  -->
                        <div class="text-center padbot30">
                            <a class="btn btn-theme-alt btn-wide" href='/menu'>view complete menu <i
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
                    <form action="#" method="post"
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



