@extends('cp.layouts.default')

@section('page-title', 'Users')

@section('page-header')

    <h1>
        @lang('Users')
    </h1>

@endsection

@section('content')


    @include('cp.parts.table.index', ['collection' => $users, 'fields' => $fields])


@endsection