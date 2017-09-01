@extends('cp.layouts.default')

@section('page-title', \Illuminate\Support\Str::plural($name))

@section('page-header')

    <h1>
        @lang(\Illuminate\Support\Str::plural($name))
    </h1>

@endsection

@section('content')


    @include('cp.parts.table.index', compact('collection', 'fields'))


@endsection