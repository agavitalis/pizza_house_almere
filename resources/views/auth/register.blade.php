<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>PizzaHouse | Auth &amp; </title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('admin_assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('admin_assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('admin_assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('admin_assets/img/favicons/favicon.ico')}}">
    <link rel="manifest" href="{{ asset('admin_assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage" content="{{ asset('admin_assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="{{ asset('admin_assets/css/theme.css') }}" rel="stylesheet">
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container-fluid">
        <div class="row min-vh-100 flex-center no-gutters">
          <div class="col-lg-8 col-xxl-5 py-3"><img class="bg-auth-circle-shape" src="{{ asset('admin_assets/img/illustrations/bg-shape.png') }}" alt="" width="250"><img class="bg-auth-circle-shape-2" src="{{ asset('admin_assets/img/illustrations/shape-1.png') }}" alt="" width="150">
            <div class="card overflow-hidden z-index-1">
              <div class="card-body p-0">
                <div class="row no-gutters h-100">
                  <div class="col-md-5 text-white text-center bg-card-gradient">
                    <div class="position-relative p-4 pt-md-5 pb-md-7">
                      <div class="bg-holder bg-auth-card-shape" style="background-image:url({{ asset('admin_assets/img/illustrations/half-circle.png') }});"></div>
                      <!--/.bg-holder-->
                      <div class="z-index-1 position-relative"><a class="text-white mb-4 text-sans-serif font-weight-extra-bold fs-4 d-inline-block" href="/">PizzaHouse</a>
                        <p class="text-100">Verse en heerlijke pizza, bereid om je dag goed te maken. Grijp de jouwe nu!</p>
                      </div>
                    </div>
                    <div class="mt-3 mb-4 mt-md-4 mb-md-5">
                      <p class="pt-3">Have an account?<br><a class="btn btn-outline-light mt-2 px-4" href="{{ route('login') }}">Log In</a></p>
                    </div>
                  </div>
                  <div class="col-md-7 d-flex flex-center">
                    <div class="p-4 p-md-5 flex-grow-1">
                      <h3>Register</h3>
                      <form method="POST" action="{{ route('register') }}">
                        @csrf
        
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="card-name">Firstname</label>
                            <input id="card-name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus >

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-group col-6">
                            <label for="card-name">Lastname</label>
                            <input id="card-name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus >

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                         
                        </div>





                        <div class="form-group">
                          <label for="card-email">Email address</label>
                          <input id="card-email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" >

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                        <div class="form-row">
                          <div class="form-group col-6">
                            <label for="card-password">Password</label>
                            <input id="card-password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>
                          <div class="form-group col-6">
                            <label for="card-confirm-password">Confirm Password</label>
                            <input id="card-confirm-password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                          </div>
                        </div>
                        <div class="custom-control custom-checkbox"><input class="custom-control-input" type="checkbox" id="card-register-checkbox" /><label class="custom-control-label" for="card-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                        <div class="form-group"><button class="btn btn-primary btn-block mt-3" type="submit" name="submit">Register</button></div>
                      </form>
                      <div class="w-100 position-relative mt-4">
                        <hr class="text-300" />
                        <div class="position-absolute absolute-centered t-0 px-3 bg-white text-sans-serif fs--1 text-500 text-nowrap">or register with</div>
                      </div>
                      <div class="form-group mb-0">
                        <div class="row no-gutters">
                          <div class="col-sm-6 pr-sm-1"><a class="btn btn-outline-google-plus btn-sm btn-block mt-2" href="#"><span class="fab fa-google-plus-g mr-2" data-fa-transform="grow-8"></span> google</a></div>
                          <div class="col-sm-6 pl-sm-1"><a class="btn btn-outline-facebook btn-sm btn-block mt-2" href="#"><span class="fab fa-facebook mr-2" data-fa-transform="grow-8"></span> facebook</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="{{ asset('admin_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('admin_assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('admin_assets/lib/stickyfilljs/stickyfill.min.js') }}"></script>
    <script src="{{ asset('admin_assets/lib/sticky-kit/sticky-kit.min.js') }}"></script>
    <script src="{{ asset('admin_assets/lib/is_js/is.min.js') }}"></script>
    <script src="{{ asset('admin_assets/lib/%40fortawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin_assets/lib/lodash/lodash.min.js') }}"></script><!-- Global site tag (gtags') }}) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-122907869-1"></script>

    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-122907869-1');
    </script>
    <script src="{{ asset('admin_assets/js/theme.js') }}"></script>
  </body>


</html>