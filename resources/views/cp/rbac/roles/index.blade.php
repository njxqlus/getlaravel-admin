@extends('cp.layouts.default')

@section('page-title', __('cp.users'))

@section('page-header')

    <h1>@lang('cp.users')</h1>

@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\UserController'])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.users.table')

        </div>

    </div>

@endsection