@extends('cp.layouts.default')

@section('page-title', 'Role')

@section('page-header')

    <h1>
        @lang('cp.role')
        <small>{!! $role->display_name !!}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'display_name', 'description', 'created_at'])

        @include('cp.parts.table.show', ['item' => $role, compact('fields')])

    </div>

@endsection