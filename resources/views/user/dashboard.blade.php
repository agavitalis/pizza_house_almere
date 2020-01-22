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
                        <h2>Dashboard</h2>
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="index.html">HOME</a></li>
                            <li class="list-inline-item"><a href="#">Dashboard</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Breadcrumb End -->

            <!-- Dashboard Start -->
            <div class="dashboard">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 commontop text-center">
                            <h4>User Dashboard</h4>
                            <div class="divider style-1 center">
                                <span class="hr-simple left"></span>
                                <i class="icofont icofont-ui-press hr-icon"></i>
                                <span class="hr-simple right"></span>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam efficitur placerat nulla, in suscipit erat sodales id. Nullam ultricies eu turpis at accumsan. Mauris a sodales mi, eget lobortis nulla.</p>
                        </div>
                        <div class="col-lg-12 col-md-12 user-profile">
                            <div class="row">
                                <div class="col-md-3 col-lg-2">
                                    <div class="user-profile-tabs">
                                        <!--  Menu Tabs Start  -->
                                        <ul class="nav nav-tabs flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#overview" aria-expanded="true">
                                                    <i class="icofont icofont-dashboard-web"></i>
                                                    <span>Overview</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#profile" aria-expanded="true">
                                                    <i class="icofont icofont-ui-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#history" aria-expanded="true">
                                                    <i class="icofont icofont-history"></i>
                                                    <span>History</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#cards" aria-expanded="true">
                                                    <i class="icofont icofont-credit-card"></i>
                                                    <span>My Card</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#complaint" aria-expanded="true">
                                                    <i class="icofont icofont-support-faq"></i>
                                                    <span>Complaint</span>
                                                </a>
                                            </li>

                                        </ul>
                                        <!--  Menu Tabs Start  -->
                                    </div>
                                </div>
                                <div class="col-md-9 col-lg-10">
                                    <div class="tab-content">
                                        <div id="overview" class="tab-pane fade active show">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="brief-info">
                                                        <div class="media">
                                                            <img class="mr-3" src="assets/images/blog-detail/01.jpg" alt="steam">
                                                            <div class="media-body">
                                                                <h4>Kapil</h4>
                                                                <p><i class="icofont icofont-envelope"></i> kapil@mywebsite.com</p>
                                                                <p><i class="icofont icofont-phone"></i> +91 1234567890</p>
                                                                <p><i class="icofont icofont-location-pin"></i> Ahmedabad, INDIA</p>
                                                            </div>
                                                        </div>
                                                        <div class="brief-info-footer">
                                                            <a href="#"><i class="icofont icofont-edit"></i>Edit Profile</a>
                                                        </div>
                                                    </div>

                                                    <div class="most-recent-order">
                                                        <h5>Recent Orders</h5>
                                                        <div class="field-entry">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <p>Food Title Here</p>
                                                                </div>
                                                                <div class="col">
                                                                    <p class="confirmed"><i class="icofont icofont-check"></i>Confirmed</p>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <a href="#">Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-entry">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <p>Food Title Here</p>
                                                                </div>
                                                                <div class="col">
                                                                    <p class="failed"><i class="icofont icofont-close"></i>Failed</p>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <a href="#">Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-entry">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <p>Food Title Here</p>
                                                                </div>
                                                                <div class="col">
                                                                    <p class="confirmed"><i class="icofont icofont-check"></i>Confirmed</p>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <a href="#">Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-entry">
                                                            <div class="row">
                                                                <div class="col-5">
                                                                    <p>Food Title Here</p>
                                                                </div>
                                                                <div class="col">
                                                                    <p class="confirmed"><i class="icofont icofont-check"></i>Confirmed</p>
                                                                </div>
                                                                <div class="col text-right">
                                                                    <a href="#">Detail</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="user-profile-offer">
                                                        <h5>Offers For You</h5>
                                                        <div class="offer-body">
                                                            <div class="offer-entry">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-4 align-self-center offer-left text-center">	
                                                                        <p>25% OFF</p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-8 offer-right">
                                                                        <p>Get 25% OFF on Lunch when you pay with your Bank of America Credit Card. <a href="#">Book Now</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="offer-entry">
                                                                <div class="row">
                                                                    <div class="col-md-4 col-sm-4 align-self-center offer-left text-center">	
                                                                        <p>35% OFF</p>
                                                                    </div>
                                                                    <div class="col-md-8 col-sm-8 offer-right">
                                                                        <p>Get 25% OFF on Dinner when you pay with your SBI Credit Card. <a href="#">Book Now</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="user-notification">
                                                        <h5>Notification</h5>
                                                        <div class="notification-body">
                                                            <div class="notification-entry">
                                                                <p><i class="icofont icofont-lunch"></i> Lunch Starting from $199 <span>1 hr ago</span></p>
                                                            </div>
                                                            <div class="notification-entry">
                                                                <p><i class="icofont icofont-pizza"></i> 20% Cashback on Pizza <span>1 hr ago</span></p>
                                                            </div>
                                                            <div class="notification-entry">
                                                                <p><i class="icofont icofont-food-cart"></i> 50% off on all items <span>2 Days ago</span></p>
                                                            </div>
                                                            <div class="notification-entry">
                                                                <p><i class="icofont icofont-sun-alt"></i> New Year special offer <span>1 Month ago</span></p>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="profile" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="user-personal-info">
                                                        <h5>Personal Information</h5>
                                                        <div class="user-info-body">
                                                            <form>
                                                                <div class="form-row">
                                                                    <div class="form-group col-md-6">
                                                                        <input name="fname" required="" placeholder="First Name" class="form-control" type="text">
                                                                    </div>
                                                                    <div class="form-group col-md-6">
                                                                        <input name="lname" required="" placeholder="Last Name" class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12">
                                                                        <input name="email" required="" placeholder="kapil@mywebsite.com" class="form-control" type="email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12">
                                                                        <input name="contact" required="" placeholder="Contact Number" class="form-control" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <label class="col-12">Date Of Birth</label>
                                                                    <div class="col-4 form-group">
                                                                        <select class="form-control" name="day">
                                                                            <option>Day</option>
                                                                            <option>01</option>
                                                                            <option>02</option>
                                                                            <option>03</option>
                                                                            <option>04</option>
                                                                            <option>05</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4 form-group">
                                                                        <select class="form-control" name="month">
                                                                            <option>Month</option>
                                                                            <option>01</option>
                                                                            <option>02</option>
                                                                            <option>03</option>
                                                                            <option>04</option>
                                                                            <option>05</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-4 form-group">
                                                                        <select class="form-control" name="year">
                                                                            <option>Year</option>
                                                                            <option>1990</option>
                                                                            <option>1991</option>
                                                                            <option>1992</option>
                                                                            <option>1993</option>
                                                                            <option>1994</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12">
                                                                        <textarea placeholder="Your Current Address" id="current-address" class="form-control" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-6">
                                                                        <input name="zip-code" class="form-control" placeholder="Zip Code" type="text">
                                                                    </div>
                                                                    <div class="form-group col-6">
                                                                        <input name="zip-code" class="form-control" placeholder="City" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-6">
                                                                        <input name="country" class="form-control" placeholder="Country" type="text">
                                                                    </div>
                                                                    <div class="form-group col-6">
                                                                        <input name="state" class="form-control" placeholder="State" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12">
                                                                        <label>Upload Photo</label>
                                                                        <input name="profile-pic" class="upload-pic form-control-file" type="file">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group mb-0 pt-4 col-12 text-center">
                                                                        <button class="btn btn-theme btn-md" type="submit">SAVE CHANGES</button>
                                                                        <a class="btn btn-theme btn-md btn-wide" href="#" >CANCEL</a>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="user-change-password">
                                                        <h5>Change Password</h5>
                                                        <div class="change-password-body">
                                                            <form>
                                                                <div class="form-group">
                                                                    <input placeholder="Old Password" class="form-control" name="old-password" type="password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input placeholder="New Password" class="form-control" name="new-password" type="password">
                                                                </div>
                                                                <div class="form-group">
                                                                    <input placeholder="Confirm Password" class="form-control" name="confirm-password" type="password">
                                                                </div>
                                                                <div class="form-group mb-0 pt-4 text-center">
                                                                    <button class="btn btn-theme btn-md" type="submit">SAVE CHANGES</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div id="history" class="tab-pane fade">
                                            <div class="item-entry">
                                                <span class="order-id">Order ID: FOOD94285</span>
                                                <div class="item-content">
                                                    <div class="item-body">
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 text-center">
                                                                <img src="assets/images/shop/01.jpg" alt="Steam">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <h4>Food Title Here <span class="rating"><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span></h4>
                                                                <p class="des">Cursus / Dictum / Risus</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eleifend erat, vitae aliquam metus. Donec orci tellus, rhoncus eget ipsum tempus, dignissim rutrum enim. Integer interdum sapien nec tempus luctus.</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-3 text-right">
                                                                <p class="confirmed"><i class="icofont icofont-check"></i>Confirmed</p>
                                                                <p><a class="btn btn-theme btn-md" href="#">Cancel</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-footer">
                                                        <p><strong>Order Date:</strong> 20 Aug 2018<strong>Order Total:</strong> $222</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-entry">
                                                <span class="order-id">Order ID: FOOD94284</span>
                                                <div class="item-content">
                                                    <div class="item-body">
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 text-center">
                                                                <img src="assets/images/shop/01.jpg" alt="Steam">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <h4>Food Title Here <span class="rating"><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span></h4>
                                                                <p class="des">Cursus / Dictum / Risus</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eleifend erat, vitae aliquam metus. Donec orci tellus, rhoncus eget ipsum tempus, dignissim rutrum enim. Integer interdum sapien nec tempus luctus.</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-3 text-right">
                                                                <p class="failed"><i class="icofont icofont-close"></i>Payment Failed</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-footer">
                                                        <p><strong>Order Date:</strong> 20 Aug 2018<strong>Order Total:</strong> $222</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="item-entry">
                                                <span class="order-id">Order ID: FOOD94285</span>
                                                <div class="item-content">
                                                    <div class="item-body">
                                                        <div class="row">
                                                            <div class="col-md-2 col-sm-2 text-center">
                                                                <img src="assets/images/shop/02.jpg" alt="Steam">
                                                            </div>
                                                            <div class="col-md-6 col-sm-6">
                                                                <h4>Food Title Here <span class="rating"><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i></span></h4>
                                                                <p class="des">Cursus / Dictum / Risus</p>
                                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eleifend erat, vitae aliquam metus. Donec orci tellus, rhoncus eget ipsum tempus, dignissim rutrum enim. Integer interdum sapien nec tempus luctus.</p>
                                                            </div>
                                                            <div class="col-md-4 col-sm-3 text-right">
                                                                <p class="confirmed"><i class="icofont icofont-check"></i>Completed</p>
                                                                <p><a class="btn btn-theme btn-md" href="#">Submit Review</a></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="item-footer">
                                                        <p><strong>Order Date:</strong> 20 Aug 2018 <strong>Order Total:</strong> $222</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="text-center load-more">
                                                <a class="btn btn-theme btn-md btn-wide" href="#">LOAD MORE</a>
                                            </div>

                                        </div>

                                        <div id="cards" class="tab-pane fade">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="card-entry">
                                                        <div class="right">
                                                            <p><a href="#"><i class="icofont icofont-pencil-alt-5"></i></a><a href="#"><i class="icofont icofont-close"></i></a></p>
                                                        </div>
                                                        <h4>XXXX XXXX XXXX 1234</h4>
                                                        <p>Valid Thru 06/22</p>
                                                        <div class="card-type">
                                                            <p>Name On Card</p>
                                                            <div class="left">
                                                                <h4>Kapil Patel</h4>
                                                            </div>
                                                            <div class="right">
                                                                <img src="assets/images/mastercard.png" alt="Steam">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-entry">
                                                        <div class="right">
                                                            <p><a href="#"><i class="icofont icofont-pencil-alt-5"></i></a><a href="#"><i class="icofont icofont-close"></i></a></p>
                                                        </div>
                                                        <h4>XXXX XXXX XXXX 2345</h4>
                                                        <p>Valid Thru 06/22</p>
                                                        <div class="card-type">
                                                            <p>Name On Card</p>
                                                            <div class="left">
                                                                <h4>Kapil Patel</h4>
                                                            </div>
                                                            <div class="right">
                                                                <img src="assets/images/visa.png" alt="Steam">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="card-entry primary-card">
                                                        <div class="left">
                                                            <span>Primary</span>
                                                        </div>
                                                        <div class="right">
                                                            <p><a href="#"><i class="icofont icofont-pencil-alt-5"></i></a><a href="#"><i class="icofont icofont-close"></i></a></p>
                                                        </div>
                                                        <div class="clearfix"></div>
                                                        <h4>XXXX XXXX XXXX 1234</h4>
                                                        <p>Valid Thru 06/17</p>
                                                        <div class="card-type">
                                                            <p>Name On Card</p>
                                                            <div class="left">
                                                                <h4>Kapil Patel</h4>
                                                            </div>
                                                            <div class="right">
                                                                <img src="assets/images/mastercard.png" alt="Steam">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="user-add-card">
                                                        <h5>Add New Card</h5>
                                                        <div class="user-add-card-body">
                                                            <form>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12">
                                                                        <input class="form-control" name="card-number" required="" placeholder="Card Number" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-12">
                                                                        <input class="form-control" name="cardholder-name" required="" placeholder="Cardholder Name" type="text">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group col-4">
                                                                        <input class="form-control" name="valid-month" required="" placeholder="Expiry Month" type="text">
                                                                    </div>
                                                                    <div class="form-group col-4">
                                                                        <input class="form-control" name="valid-year" required="" placeholder="Expiry Year" type="text">
                                                                    </div>
                                                                    <div class="form-group col-4">
                                                                        <input class="form-control" name="cvv" required="" placeholder="CVV" type="password">
                                                                    </div>
                                                                </div>
                                                                <div class="form-row">
                                                                    <div class="form-group mb-0 col-12 text-center">
                                                                        <button class="btn btn-theme btn-md btn-wide" type="submit">ADD CARD</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div id="complaint" class="tab-pane fade">
                                            <div class="recent-complaint">
                                                <h4>Service Requests</h4>
                                                <div class="complaint-tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li class="nav-item" ><a data-toggle="tab" href="#active-complaint" class="nav-link text-center active" aria-expanded="false"><i class="icofont icofont-flash"></i> Active (3)</a></li>
                                                        <li class="nav-item"><a data-toggle="tab" href="#resolved-complaint" class="nav-link text-center" aria-expanded="false"><i class="icofont icofont-history"></i> Resolved (5)</a></li>	
                                                    </ul>
                                                </div>
                                                <div class="tab-content">
                                                    <div id="active-complaint" class="tab-pane fade active show">
                                                        <p><a href="#"><span>Ticket #FOOD94285:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                        <p><a href="#"><span>Ticket #FOOD94287:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                        <p><a href="#"><span>Ticket #FOOD94295:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                    </div>
                                                    <div id="resolved-complaint" class="tab-pane fade">
                                                        <p><a href="#"><span>Ticket #FOOD94295:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                        <p><a href="#"><span>Ticket #FOOD94295:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                        <p><a href="#"><span>Ticket #FOOD94295:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                        <p><a href="#"><span>Ticket #FOOD94295:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                        <p><a href="#"><span>Ticket #FOOD94295:</span> My Order was failed but ammount has been dedicted from my account.</a></p>
                                                    </div>
                                                </div>

                                                <h4 class="mt-5">New Requests</h4>
                                                <div class="submit-complaint">
                                                    <form>
                                                        <div class="form-row">
                                                            <div class="form-group col-12">
                                                                <input class="form-control" name="booking-id" placeholder="Booking Id E.g FOOD94285" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-12">
                                                                <input class="form-control" name="subject" placeholder="Subject" type="text">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-12">
                                                                <textarea class="form-control" rows="4" name="problem" placeholder="Your Issue"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-12 text-center mb-0">
                                                                <button class="btn btn-theme btn-md btn-wide" type="submit">SUBMIT REQUEST</button>
                                                            </div>
                                                        </div>
                                                    </form>
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
            <!-- Dashboard End -->

            
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