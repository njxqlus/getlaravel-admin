<aside class="main-sidebar">

    <section class="sidebar">

        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#"><i class="fa fa-user-circle-o"></i> <span>{{ Auth::user()->name }}</span>
                    <span class="pull-right-container"><i class="fa fa-angle-double-down pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="padding: 10px;">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-xs btn-flat"><i
                                        class="fa fa-sign-out"></i> @lang('cp.sign_out')</button>
                        </form>
                    </li>
                </ul>
            </li>
        </ul>

        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="@lang('cp.search')">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>

        <ul class="sidebar-menu">
            <li class="header">@lang('cp.navigation')</li>
            <li class="treeview">
                <a href="#"><i class="fa fa-lock"></i> <span>@lang('cp.rbac')</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="{{ action('CP\RBAC\RoleController@index') }}"><span>@lang('cp.roles')</span></a>
                    </li>
                    <li>
                        <a href="{{ action('CP\RBAC\PermissionController@index') }}"><span>@lang('cp.permissions')</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ action('CP\UserController@index') }}"><i class="fa fa-user"></i>
                    <span>@lang('cp.users')</span><span
                            class="badge pull-right label-info">{{ App\Models\User::count() }}</span></a>
            </li>
        </ul>
    </section>

</aside>