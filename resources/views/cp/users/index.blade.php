@extends('cp.layouts.default')

@section('page-title', 'Users')

@section('page-header')

    <h1>
        @lang('cp.users')
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        @php($fields = ['id', 'name', 'email', 'created_at'])

        @include('cp.parts.table.index', compact('collection', 'fields'))

    </div>

@endsection