<!-- Top Bar -->
<nav class="navbar navbar-expand-xl navbar-dark fixed-top hk-navbar">
    <a id="navbar_toggle_btn" class="navbar-toggle-btn nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="menu"></i></span></a>
    <a class="navbar-brand" href="#">
        <img class="brand-img d-inline-block" src="{{ asset('dist/img/logo-dark.png')}}" alt="brand" height="50"/>
    </a>
    <ul class="navbar-nav hk-navbar-content">
        <li class="nav-item">
            <a id="navbar_search_btn" class="nav-link nav-link-hover" href="javascript:void(0);"><span class="feather-icon"><i data-feather="search"></i></span></a>
        </li>
        
        
        <li class="nav-item dropdown dropdown-authentication">
            <a class="nav-link dropdown-toggle no-caret" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media">
<!--                    <div class="media-img-wrap">
                        <div class="avatar">
                            <img src="dist/img/avatar12.jpg" alt="user" class="avatar-img rounded-circle">
                        </div>
                        <span class="badge badge-success badge-indicator"></span>
                    </div>-->
                    <div class="media-body">
                        <span>User name<i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </a>
            <div class="dropdown-menu dropdown-menu-right" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <a class="dropdown-item" href="#" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();" >
                    <i class="dropdown-icon zmdi zmdi-power"></i><span>Log out</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                </form>
            </div>
        </li>
    </ul>
</nav>
<form role="search" class="navbar-search">
    <div class="position-relative">
        <a href="javascript:void(0);" class="navbar-search-icon"><span class="feather-icon"><i data-feather="search"></i></span></a>
        <input type="text" name="example-input1-group2" class="form-control" placeholder="Type here to Search">
        <a id="navbar_search_close" class="navbar-search-close" href="#"><span class="feather-icon"><i data-feather="x"></i></span></a>
    </div>
</form>
<!-- Left Sidebar -->
<nav class="hk-nav hk-nav-dark" style="background: url({{asset('/img/let.png')}})">
    <a href="javascript:void(0);" id="hk_nav_close" class="hk-nav-close"><span class="feather-icon"><i data-feather="x"></i></span></a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap" style="background: #000000ab;">
            <!-- <ul class="navbar-nav flex-row"> -->

            <!-- Changes Done By Sneha -->
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/home')}}">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);" data-toggle="collapse" data-target="#dash_drp">
                        <span class="feather-icon"><i data-feather="activity"></i></span>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                    <ul id="dash_drp" class="nav flex-column collapse collapse-level-1">
                        <li class="nav-item">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('/')}}">Dashboard</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="#">Update Password</a>
                                </li> 
                               
                            </ul>
                        </li>
                    </ul>
                </li> -->

                <!-- Changes Done By Sneha -->
                <li class="nav-item">
					<a class="nav-link" href="{{url('/banners')}}">
						<span class="feather-icon"><i data-feather="briefcase"></i></span>
						<span class="nav-link-text">Banner</span>
					</a>
				</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/services')}}">
                        <span class="feather-icon"><i data-feather="briefcase"></i></span>
                        <span class="nav-link-text">Services</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/faqs')}}">
                        <span class="feather-icon"><i data-feather="book"></i></span>
                        <span class="nav-link-text">FAQs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/portfolios')}}">
                        <span class="feather-icon"><i data-feather="camera"></i></span>
                        <span class="nav-link-text">Portfolio</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/testimonials')}}">
                        <span class="feather-icon"><i data-feather="user-check"></i></span>
                        <span class="nav-link-text">Testimonials</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/users')}}">
                        <span class="feather-icon"><i data-feather="users"></i></span>
                        <span class="nav-link-text">Users</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/teams')}}">
                        <span class="feather-icon"><i data-feather="settings"></i></span>
                        <span class="nav-link-text">Our Team Mambers</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/tutorials')}}">
                        <span class="feather-icon"><i data-feather="youtube"></i></span>
                        <span class="nav-link-text">Tutorials</span>
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>
<!-- Left Sidebar -->
