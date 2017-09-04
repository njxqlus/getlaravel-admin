@extends('cp.layouts.default')

@section('page-title', $title)

@section('page-header')

    <h1>
        @lang($title)
    </h1>

@endsection

@section('content')

<div class="panel panel-default">

    @include('cp.models.table.index', compact('collection', 'fields'))

</div>

@endsection