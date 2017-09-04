@extends('cp.layouts.default')

@section('page-title', 'User')

@section('page-header')

    <h1>
        @lang('cp.user')
        <small>{!! $user->name !!}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'email', 'created_at', 'updated_at'])

        @include('cp.parts.table.show', ['item' => $user, compact('fields')])

    </div>

    <h3>
        @lang('cp.roles')
    </h3>

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'display_name', 'description', 'created_at'])

        @include('cp.parts.table.index', ['collection' => $user->roles()], compact('fields'))

    </div>

    <h3>
        @lang('cp.permissions')
    </h3>

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'display_name', 'description', 'created_at'])

        @include('cp.parts.table.index', ['collection' => $user->permissions()], compact('fields'))

    </div>

@endsection