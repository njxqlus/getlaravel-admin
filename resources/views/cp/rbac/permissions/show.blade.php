@extends('cp.layouts.default')

@section('page-title', __('cp.permission')." $permission->name")

@section('page-header')

    <h1>@lang('cp.permission')
        <small>{{ $permission->name }}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-info">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\RBAC\PermissionController', 'object'=>$permission])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            <table class="table table-responsive table-bordered table-striped">
                <tbody>
                <tr>
                    <td>@lang('cp.id')</td>
                    <td>{{ $permission->id }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.name')</td>
                    <td>{{ $permission->name }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.display_name')</td>
                    <td>{{ $permission->display_name }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.description')</td>
                    <td>{{ $permission->description }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.created_at')</td>
                    <td>{{ $permission->created_at }}</td>
                </tr>
                <tr>
                    <td>@lang('cp.updated_at')</td>
                    <td>{{ $permission->updated_at }}</td>
                </tr>
                </tbody>
            </table>

        </div>

    </div>

@endsection