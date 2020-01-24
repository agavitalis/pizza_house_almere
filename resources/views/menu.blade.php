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

<!-- Breadcrumb Start -->
<div class="bread-crumb">
    <div class="container">
        <div class="matter">
            <h2>Pizza Menu</h2>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="index.html">HOME</a></li>
                <li class="list-inline-item"><a href="#">Pizza Menu</a></li>
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
                @foreach($popular_items as $popular_item)
                    <div class="item">
                        <!-- Box Start -->
                        <div class="box">
                            <a href="#"><img src="{{$popular_item->display_picture_path}}" alt="image" title="image" height="200" width="370" class="img-responsive" /></a>
                            <div class="caption">
                                <h4>{{$popular_item->pizza_name}}</h4>
                                <span>Flavour: {{$popular_item->flavour}}</span>
                                <p>${{$popular_item->price}}</p>
                            </div>
                            <div class="form-group col-xs-12 col-md-12">
                                <div class="text-center">
                                    <div class="add-cart">
                                        <form action="/cart" method="post">
                                            <fieldset>
                                                @csrf
                                                <input type="hidden" name="cmd" value="_cart" />
                                                <input type="hidden" name="add" value="1" />
                                                <input type="hidden" name="business" value=" " />
                                                <input type="hidden" name="item_number" value="{{$popular_item->id}}" />
                                                <input type="hidden" name="item_name" value="{{$popular_item->pizza_name}}" />
                                                <input type="hidden" name="amount" value="{{$popular_item->price}}" />
                                                <input type="hidden" name="discount_amount" value="0.00" />
                                                <input type="hidden" name="currency_code" value="NGN" />
                                                <input type="hidden" name="return" value=" " />
                                                <input type="hidden" name="cancel_return" value=" " />
                                                <input type="submit" name="submit" value="Add to cart" class="button btn" />
                                            </fieldset>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- Box End -->
                    </div>
                @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular Dishes End -->


@php
    $count = 1
@endphp
@foreach($complete_menu as $menu)
    <!-- Breakfast Menu Start -->
    <div class="menu menu-2 {{ ($count % 2) == 1? 'gray-bg':'white-bg'}}">
        <div class="menu-inner">
            <div class="container">
                <div class="row ">
                    <!-- Title Content Start -->
                    <div class="col-sm-12 col-xs-12 commontop text-center">
                        <h4>{{$menu['menu']->menu_name}}</h4>
                        <div class="divider style-1 center">
                            <span class="hr-simple left"></span>
                            <i class="icofont icofont-ui-press hr-icon"></i>
                            <span class="hr-simple right"></span>
                        </div>
                        <p>{{$menu['menu']->menu_description}}</p>
                    </div>
                    <!-- Title Content End -->
                    <div class="col-sm-12 col-xs-12">
                        <div class="row">
                        @foreach($menu['menu_pizza'] as $pizza)
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- Box Start -->
                                <diV class="box">
                                    <div class="image">
                                        <img src="{{$pizza->display_picture_path}}" alt="image" title="image" class="img-responsive"  height="125" width="125" />
                                    </div>
                                    <div class="caption">
                                        <h4>{{$pizza->pizza_name}}</h4>
                                        <p class="des">Flavour: {{$pizza->flavour}}</p>
                                        <span>{{$pizza->pizza_description}}</span>
                                        <div class="price">
                                            <div class="text-center">${{$pizza->price}}</div>
                                            <div class="text-center mt-3">
                                                <div class="add-cart">
                                                    <form action="/cart" method="post">
                                                        <fieldset>
                                                            @csrf
                                                            <input type="hidden" name="cmd" value="_cart" />
                                                            <input type="hidden" name="add" value="1" />
                                                            <input type="hidden" name="business" value=" " />
                                                            <input type="hidden" name="item_number" value="{{$pizza->id}}" />
                                                            <input type="hidden" name="item_name" value="{{$pizza->pizza_name}}" />
                                                            <input type="hidden" name="amount" value="{{$pizza->price}}" />
                                                            <input type="hidden" name="discount_amount" value="0.00" />
                                                            <input type="hidden" name="currency_code" value="NGN" />
                                                            <input type="hidden" name="return" value=" " />
                                                            <input type="hidden" name="cancel_return" value=" " />
                                                            <button type="submit" class="button btn-theme btn-sm" >+
                                                                <i class="icofont icofont-cart-alt">
                                                                    <span class="d-sm-block d-md-none text-white">Add to Cart</span>     
                                                                </i>
                                                            </button>
                                                        </fieldset>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Box End -->
                            </div>
                        @endforeach
                            
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breakfast Menu End -->
    @php
        $count ++
    @endphp
@endforeach

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


       