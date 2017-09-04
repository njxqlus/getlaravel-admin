<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('vendor/admin-lte/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="@lang('cp.search')">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- RBAC -->
            <li class="treeview">
                <a href="#"><i class="fa fa-lock"></i> <span>@lang('cp.rbac')</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ action('CP\RBAC\RoleController@index') }}">
                            <span>@lang('cp.roles')</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ action('CP\RBAC\PermissionController@index') }}">
                            <span>@lang('cp.permissions')</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ action('CP\UserController@index') }}">
                    <i class="fa fa-user"></i> <span>@lang('cp.users')</span>
                    <span class="badge pull-right label-info">{{ App\Models\User::count() }}</span>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>