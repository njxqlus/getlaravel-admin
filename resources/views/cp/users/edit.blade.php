@extends('cp.layouts.default')

@section('page-title', __('cp.edit').": ".__('cp.user')." $user->name")

@section('page-header')

    <h1>@lang('cp.edit')
        <small>{!! $user->name !!}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\UserController', 'object'=>$user])

        </div>

    </div>

    <form action="{{ action('CP\UserController@update', $user) }}" method="POST">

        <input type="hidden" name="_method" value="PUT">

        {{ csrf_field() }}

        <div class="panel panel-default">

            <div class="panel-body">

                <div class="form-group">
                    <label for="name">@lang('cp.name')</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" placeholder="@lang('cp.name')"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">@lang('cp.email')</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}"
                           placeholder="@lang('cp.email')"
                           class="form-control">
                </div>

                <div class="form-group pull-right">
                    <button class="btn btn-primary">@lang('cp.save')</button>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        @lang('cp.roles')
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            @foreach(\App\Models\RBAC\Role::all() as $role)
                                @php
                                    $user->hasRole($role->name) ? $checked = ' checked': $checked = '';
                                @endphp
                                <label><input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                              title="{{ $role->display_name }}"{{ $checked }}> {{ $role->display_name }}
                                </label>
                                <br>
                            @endforeach
                        </div>

                        <div class="form-group pull-right">
                            <button class="btn btn-primary">@lang('cp.save')</button>
                        </div>

                    </div>

                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">

                    <div class="panel-heading">
                        @lang('cp.permissions')
                    </div>

                    <div class="panel-body">

                        <div class="form-group">
                            @foreach(\App\Models\RBAC\Permission::all() as $permission)
                                @php
                                    $user->hasPermission($permission->name) ? $checked = ' checked': $checked = '';
                                @endphp
                                <label><input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                              title="{{ $permission->display_name }}"{{ $checked }}> {{ $permission->display_name }}
                                </label><br>
                            @endforeach
                        </div>

                        <div class="form-group pull-right">
                            <button class="btn btn-primary">@lang('cp.save')</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </form>


@endsection