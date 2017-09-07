@extends('cp.layouts.default')

@section('page-title', __('cp.user_edit'))

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

    <div class="panel panel-default">

        <div class="panel-body">

            <form action="{{ action('CP\UserController@update', $user) }}" method="POST">

                <input type="hidden" name="_method" value="PUT">

                {{ csrf_field() }}

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

            </form>

        </div>

    </div>

@endsection