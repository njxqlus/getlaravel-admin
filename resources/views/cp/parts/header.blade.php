<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">@lang('cp.toggle_navigation')</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding: 10px;">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-default btn-sm btn-flat"><i
                                    class="fa fa-sign-out"></i> @lang('cp.sign_out')</button>
                    </form>
                </li>
            </ul>
        </div>
    </nav>
</header>