<nav class="navbar navbar-light navbar-glass fs--1 font-weight-semi-bold row navbar-top sticky-kit navbar-expand">
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarVerticalCollapse"
        aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle navigation"><span
            class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand text-left ml-3" href="index-2.html">
        <div class="d-flex align-items-center"><img class="mr-2"
                src="{{ asset('admin_assets/img/illustrations/falcon.png') }}" alt="" width="40" />
                <span class="text-sans-serif">PizzaHouse</span> 
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown1">
        <ul class="navbar-nav align-items-center d-none d-lg-block">
            <li class="nav-item">
                <form class="form-inline search-box"><input class="form-control rounded-pill search-input" type="search"
                        placeholder="Search..." aria-label="Search" /><span
                        class="position-absolute fas fa-search text-400 search-box-icon"></span>
                    
                </form>
            </li>
        </ul>
        <ul class="navbar-nav align-items-center ml-auto">
           
            <li class="nav-item dropdown">
                <a class="nav-link unread-indicator px-0" id="navbarDropdownNotification"
                    href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                        class="fas fa-bell fs-4" data-fa-transform="shrink-6"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-card"
                    aria-labelledby="navbarDropdownNotification">
                    <div class="card card-notification shadow-none" style="max-width: 20rem">
                        <div class="card-header">
                            <div class="row justify-content-between align-items-center">
                                <div class="col-auto">
                                    <h6 class="card-header-title mb-0">Notifications</h6>
                                </div>
                                <!-- <div class="col-auto"><a class="card-link font-weight-normal" href="#">Mark all as
                                        read</a></div> -->
                            </div>
                        </div>
                        <div class="list-group list-group-flush font-weight-normal fs--1">
                            <div class="list-group-title">No Notifications</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush bg-200" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl mr-3">
                                            <img class="rounded-circle" src="{{ asset('admin_assets/img/team/1.jpg') }}"
                                                alt="" />
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello
                                            world 😍"</p>
                                        <span class="notification-time"><span class="mr-1" role="img"
                                                aria-label="Emoji">💬</span>Just now</span>
                                    </div>
                                </a>
                            </div>
                            
                            
                        </div>
                        <div class="card-footer text-center border-top-0"><a class="card-link d-block"
                                href="pages/notifications.html">View all</a></div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link pr-0" id="navbarDropdownUser" href="#" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-xl">
                        <img class="rounded-circle" src="{{ asset('admin_assets/img/team/3.jpg') }}" alt="" />
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdownUser">
                    <div class="bg-white rounded-soft py-2">
                        <a class="dropdown-item font-weight-bold text-warning" href="#!"><span
                                class="fas fa-user mr-1"></span><span> Vitalis </span></a>
                        <div class="dropdown-divider"></div>
                        
                        <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                      
                        <div class="dropdown-divider"></div>
                                
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>