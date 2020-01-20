<nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass"><a class="navbar-brand text-left"
        href="index-2.html">
        <div class="d-flex align-items-center py-3"><img class="mr-2"
                src="{{ asset('admin_assets/img/illustrations/falcon.png') }}" alt="" width="40" /><span
                class="text-sans-serif">PizzaHouse</span>
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-chart-pie"></span></span><span>Dashboard</span>
                    </div>
                </a>

            </li>
           
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#stories" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="stories">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-copy"></span></span><span>Menu</span></div>
                </a>
                <ul class="nav collapse" id="stories" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="/admin_create_menu">Create Menu</a></li> 
                    <li class="nav-item"><a class="nav-link" href="/admin_manage_menu">Manage Menu</a></li>  
                </ul>
            </li>

        </ul>
        <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <ul class="navbar-nav flex-column">
           
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fab fa-hotjar"></span></span><span>Pizza</span></div>
                </a>
                <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="/admin_create_pizza">Add Pizza</a></li>
                    <li class="nav-item"><a class="nav-link" href="/admin_manage_pizza">Manage Pizza</a></li>
                    
                </ul>
            </li>
           
        </ul>
        <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <ul class="navbar-nav flex-column">
           
           <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-toggle="collapse"
                   role="button" aria-expanded="false" aria-controls="orders">
                   <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                               class="fas fa-cart-plus"></span></span><span>Orders</span></div>
               </a>
               <ul class="nav collapse" id="orders" data-parent="#navbarVerticalCollapse">
                   <li class="nav-item"><a class="nav-link" href="/admin_orders_latest">Latest Orders</a></li>
                   <li class="nav-item"><a class="nav-link" href="/admin_orders_processing">Processing Orders</a></li>
                   <li class="nav-item"><a class="nav-link" href="/admin_orders_delivered">Completed Orders</a></li>
                   <hr class="border-300 my-2" />
                   <li class="nav-item"><a class="nav-link" href="/admin_orders">All Orders</a></li>
                   
               </ul>
           </li>
          
       </ul>
       <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <ul class="navbar-nav flex-column">

            <li class="nav-item"><a class="nav-link" href="/documentations">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-users"></span></span><span>Users</span><span
                            class="badge badge-pill ml-2 badge-soft-primary">new</span></div>
                </a>
            </li>
        </ul><a class="btn btn-primary btn-sm btn-block my-3" href="/logout">Log out</a>
    </div>
</nav>