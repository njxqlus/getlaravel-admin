@extends('cp.layouts.default')

@section('page-title', 'Permissions')

@section('page-header')

    <h1>
        @lang('cp.permissions')
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'display_name', 'description', 'created_at'])

        @include('cp.parts.table.index', compact('collection', 'fields'))

    </div>

@endsection