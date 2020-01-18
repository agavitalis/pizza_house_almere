<nav class="navbar navbar-vertical navbar-expand-xl navbar-light navbar-glass"><a class="navbar-brand text-left"
        href="index-2.html">
        <div class="d-flex align-items-center py-3"><img class="mr-2"
                src="{{ asset('assets/img/illustrations/falcon.png') }}" alt="" width="40" /><span
                class="text-sans-serif">Biafra</span>
        </div>
    </a>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link" href="#home" data-toggle="collapse" role="button"
                    aria-expanded="true" aria-controls="home">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-chart-pie"></span></span><span>Home</span>
                    </div>
                </a>

            </li>
           
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#stories" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="stories">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-copy"></span></span><span>Stories</span></div>
                </a>
                <ul class="nav collapse" id="stories" data-parent="#navbarVerticalCollapse">
                    
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#add_stories"
                            data-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="add_stories">Add Stories</a>
                        <ul class="nav collapse" id="add_stories">
                            <li class="nav-item"><a class="nav-link" href="/add_stories_text">Text</a></li>
                            <li class="nav-item"><a class="nav-link" href="/add_stories_audio">Audio</a></li>
                            <li class="nav-item"><a class="nav-link" href="/add_stories_video">Video</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/associations.html">Manage Stories</a></li>

                    
                </ul>
            </li>

        </ul>
        <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <ul class="navbar-nav flex-column">
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#egallery" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="egallery">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-qrcode"></span></span><span>Gallery</span></div>
                </a>
                <ul class="nav collapse" id="egallery" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#egallery-themes"
                            data-toggle="collapse" role="button" aria-expanded="false"
                            aria-controls="egallery-themes">Themes</a>
                        <ul class="nav collapse" id="egallery-themes">
                            <li class="nav-item"><a class="nav-link" href="/create_theme">Create Themes</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Manage Themes</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="/create_gallery">Create Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Manage Gallery</a></li>
                    
                </ul>
            </li>
           
            <li class="nav-item"><a class="nav-link dropdown-indicator" href="#utilities" data-toggle="collapse"
                    role="button" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fab fa-hotjar"></span></span><span>Archives</span></div>
                </a>
                <ul class="nav collapse" id="utilities" data-parent="#navbarVerticalCollapse">
                    <li class="nav-item"><a class="nav-link" href="/create_archive">Add Archives</a></li>
                    <li class="nav-item"><a class="nav-link" href="/manage_archive">Manage Archives</a></li>
                    
                </ul>
            </li>
           
        </ul>
        <div class="px-3 px-xl-0">
            <hr class="border-300 my-2" />
        </div>
        <ul class="navbar-nav flex-column">

            <li class="nav-item"><a class="nav-link" href="/documentations">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-code-branch"></span></span><span>API Docs</span><span
                            class="badge badge-pill ml-2 badge-soft-primary">v1.0.0</span></div>
                </a>
            </li>
        </ul><a class="btn btn-primary btn-sm btn-block my-3" href="#">Log out</a>
    </div>
</nav>