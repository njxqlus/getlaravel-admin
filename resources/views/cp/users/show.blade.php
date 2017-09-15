@extends('cp.layouts.default')

@section('page-title', __('cp.user')." $user->name")

@section('page-header')

    <h1>@lang('cp.user')
        <small>{{ $user->name }}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-info">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\UserController', 'object'=>$user])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            <table class="table table-responsive table-bordered table-striped">
                <tbody>
                <tr>
                    <td>@lang('cp.id')</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.name')</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.email')</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.created_at')</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.updated_at')</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">

                <div class="panel-heading">
                    @lang('cp.roles')
                </div>

                <div class="panel-body">
                    <ul>
                        @foreach($user->roles as $role)
                            <li>
                                <a href="{{ action('CP\RBAC\RoleController@show', $role) }}">{{ $role->display_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="panel panel-default">

                <div class="panel-heading">
                    @lang('cp.permissions')
                </div>

                <div class="panel-body">
                    <ul>
                        @foreach($user->permissions as $permission)
                            <li>
                                <a href="{{ action('CP\RBAC\PermissionController@show', $permission) }}">{{ $permission->display_name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>

@endsection