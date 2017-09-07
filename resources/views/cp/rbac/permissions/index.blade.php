@extends('cp.layouts.default')

@section('page-title', __('cp.permissions'))

@section('page-header')

    <h1>@lang('cp.permissions')</h1>

@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\RBAC\PermissionController'])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.rbac.permissions.table')

        </div>

    </div>

@endsection