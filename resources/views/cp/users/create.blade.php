@extends('cp.layouts.default')

@section('page-title', __('cp.create').": ".__('cp.user'))

@section('page-header')

    <h1>@lang('cp.create')</h1>

@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\UserController'])

        </div>

    </div>

    <form action="{{ action('CP\UserController@store') }}" method="POST">

        {{ csrf_field() }}

        <div class="panel panel-default">

            <div class="panel-body">

                <div class="form-group">
                    <label for="name">@lang('cp.name')</label>
                    <input type="text" id="name" name="name" placeholder="@lang('cp.name')" value="{{ old('name') }}"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="email">@lang('cp.email')</label>
                    <input type="email" id="email" name="email" placeholder="@lang('cp.email')"
                           value="{{ old('email') }}" class="form-control">
                </div>

                <div class="form-group">
                    <label for="password">@lang('cp.password')</label>
                    <input type="password" id="password" name="password" placeholder="@lang('cp.password')"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">@lang('cp.password_confirmation')</label>
                    <input type="password" id="password_confirmation" name="password_confirmation"
                           placeholder="@lang('cp.password_confirmation')"
                           class="form-control">
                </div>

                <div class="form-group pull-right">
                    <button class="btn btn-primary">@lang('cp.create')</button>
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
                                <label><input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                              title="{{ $role->display_name }}"> {{ $role->display_name }}
                                </label>
                                <br>
                            @endforeach
                        </div>

                        <div class="form-group pull-right">
                            <button class="btn btn-primary">@lang('cp.create')</button>
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
                                <label><input type="checkbox" name="permissions[]" value="{{ $permission->id }}"
                                              title="{{ $permission->display_name }}"> {{ $permission->display_name }}
                                </label><br>
                            @endforeach
                        </div>

                        <div class="form-group pull-right">
                            <button class="btn btn-primary">@lang('cp.create')</button>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </form>


@endsection