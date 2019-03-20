<header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
        <span class="logo-mini"><b>A</b>dmin</span>
        <span class="logo-lg"><b>Admin</b>Panel</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    
                    <a href="" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" class="dropdown-toggle" data-toggle="dropdown">

                        <span class="hidden-xs">Logout</span>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <!--<ul class="dropdown-menu">
                        <li class="user-header">
                            <p>
                            <h2 style="color: white;">Admin Panel</h2>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <form action="" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                                </form>
                            </div>
                        </li>
                    </ul>-->
                </li>
            </ul>
        </div>
    </nav>
</header>