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
                            @guest
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="icofont icofont-ui-user"></i> My Account</a>
                                <ul class="dropdown-menu dropdown-menu-right drophover"
                                    aria-labelledby="dropdownMenuLink">
                                    <li class="dropdown-item"><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                                    @if (Route::has('register'))
                                    <li class="dropdown-item"><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                                    @endif
                                </ul>
                            @else 
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                        class="icofont icofont-ui-user"></i>  {{ Auth::user()->name }} </a>
                                <ul class="dropdown-menu dropdown-menu-right drophover"
                                    aria-labelledby="dropdownMenuLink">
                                    <li class="dropdown-item">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>

                                    </li>
                                    
                                </ul>
                            @endguest
                                
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