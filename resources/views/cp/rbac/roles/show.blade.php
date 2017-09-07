@extends('cp.layouts.default')

@section('page-title', __('cp.role')." $role->name")

@section('page-header')

    <h1>@lang('cp.role')
        <small>{{ $role->name }}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-info">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\RBAC\RoleController', 'object'=>$role])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            <table class="table table-responsive table-bordered table-striped">
                <tbody>
                <tr>
                    <td>@lang('cp.id')</td>
                    <td>{{ $role->id }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.name')</td>
                    <td>{{ $role->name }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.display_name')</td>
                    <td>{{ $role->display_name }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.description')</td>
                    <td>{{ $role->description }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.created_at')</td>
                    <td>{{ $role->created_at }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.updated_at')</td>
                    <td>{{ $role->updated_at }}</td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

@endsection