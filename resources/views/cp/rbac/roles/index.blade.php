@extends('cp.layouts.default')

@section('page-title', __('cp.roles'))

@section('page-header')

    <h1>@lang('cp.roles')</h1>

@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\RBAC\RoleController'])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.rbac.roles.table')

        </div>

    </div>

@endsection