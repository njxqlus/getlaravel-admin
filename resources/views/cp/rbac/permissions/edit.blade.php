@extends('cp.layouts.default')

@section('page-title', __('cp.edit').": ".__('cp.permission')." $permission->name")

@section('page-header')

    <h1>@lang('cp.edit')
        <small>{!! $permission->name !!}</small>
    </h1>

@endsection

@section('content')

    <div class="panel panel-default">

        <div class="panel-body">

            @include('cp.parts.actions', ['controller'=>'CP\RBAC\PermissionController', 'object'=>$permission])

        </div>

    </div>

    <div class="panel panel-default">

        <div class="panel-body">

            <form action="{{ action('CP\RBAC\PermissionController@update', $permission) }}" method="POST">

                <input type="hidden" name="_method" value="PUT">

                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">@lang('cp.name')</label>
                    <input type="text" id="name" name="name" value="{{ $permission->name }}" placeholder="@lang('cp.name')"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="display_name">@lang('cp.display_name')</label>
                    <input type="text" id="display_name" name="display_name" value="{{ $permission->display_name }}"
                           placeholder="@lang('cp.display_name')"
                           class="form-control">
                </div>

                <div class="form-group">
                    <label for="description">@lang('cp.description')</label>
                    <textarea id="description" name="description" placeholder="@lang('cp.description')"
                              class="form-control">{{ $permission->description }}</textarea>
                </div>

                <div class="form-group pull-right">
                    <button class="btn btn-primary">@lang('cp.save')</button>
                </div>

            </form>

        </div>

    </div>

@endsection