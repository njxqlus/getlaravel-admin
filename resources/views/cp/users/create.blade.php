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

    <div class="panel panel-default">

        <div class="panel-body">

            <form action="{{ action('CP\UserController@store') }}" method="POST">

                {{ csrf_field() }}

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

            </form>

        </div>

    </div>

@endsection