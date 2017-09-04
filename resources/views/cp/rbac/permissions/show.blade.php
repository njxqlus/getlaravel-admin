@extends('cp.layouts.default')

@section('page-title', 'Permission')

@section('page-header')

    <h1>
        @lang('cp.permission')
        <small>{!! $permission->display_name !!}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'display_name', 'description', 'created_at'])

        @include('cp.parts.table.show', ['item' => $permission, compact('fields')])

    </div>

@endsection