@extends('cp.layouts.default')

@section('page-title', __('cp.user')." $user->name")

@section('page-header')

    <h1>@lang('cp.user')
        <small>{{ $user->name }}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-info">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\UserController', 'object'=>$user])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            <table class="table table-responsive table-bordered table-striped">
                <tbody>
                <tr>
                    <td>@lang('cp.id')</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.name')</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.email')</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.created_at')</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.updated_at')</td>
                    <td>{{ $user->updated_at }}</td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

@endsection