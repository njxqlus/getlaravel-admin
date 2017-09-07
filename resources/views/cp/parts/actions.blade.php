@php
    if(!isset($action)){
        $action_name = request()->route()->getActionName();
        if($action_name) $action = explode('@', $action_name);
        if(isset($action[1])) $action = $action[1];
    }
@endphp

@if($action == 'table')

    <form action="{{ action("$controller@destroy", $object) }}" method="POST">

        <input type="hidden" name="_method" value="DELETE">

        {{ csrf_field() }}

        <a href="{{ action("$controller@show", $object) }}" class="btn btn-info btn-xs">
            <i class="fa fa-eye"></i> @lang('cp.show')</a>

        <a href="{{ action("$controller@edit", $object) }}" class="btn btn-primary btn-xs">
            <i class="fa fa-pencil"></i> @lang('cp.edit')</a>

        <button onclick="return confirm('@lang('cp.confirm_destroy')')" id="destroy-button"
                class="btn btn-danger btn-xs">
            <i class="fa fa-trash"></i> @lang('cp.delete')</button>

    </form>

@elseif($action == 'index')

    <a href="{{ action("$controller@create") }}" class="btn btn-default btn-sm"><i
                class="fa fa-plus"></i> @lang('cp.create_new')</a>

@elseif($action == 'create')

    <a href="{{ action("$controller@index") }}" class="btn btn-default btn-sm"><i
                class="fa fa-list"></i> @lang('cp.return_to_index')</a>

@elseif($action == 'edit')

    <form action="{{ action("$controller@destroy", $object) }}" method="POST">

        <input type="hidden" name="_method" value="DELETE">

        {{ csrf_field() }}

        <a href="{{ action("$controller@index") }}" class="btn btn-default btn-sm"><i
                    class="fa fa-list"></i> @lang('cp.return_to_index')</a>

        <a href="{{ action("$controller@create") }}" class="btn btn-default btn-sm"><i
                    class="fa fa-plus"></i> @lang('cp.create_new')</a>

        <button onclick="return confirm('@lang('cp.confirm_destroy')')" id="destroy-button"
                class="btn btn-default btn-sm">
            <i class="fa fa-trash"></i> @lang('cp.delete')</button>

    </form>

@elseif($action == 'show')

    <form action="{{ action("$controller@destroy", $object) }}" method="POST">

        <input type="hidden" name="_method" value="DELETE">

        {{ csrf_field() }}

        <a href="{{ action("$controller@index") }}" class="btn btn-default btn-sm"><i
                    class="fa fa-list"></i> @lang('cp.return_to_index')</a>

        <a href="{{ action("$controller@create") }}" class="btn btn-default btn-sm"><i
                    class="fa fa-plus"></i> @lang('cp.create_new')</a>

        <a href="{{ action("$controller@edit", $object) }}" class="btn btn-default btn-sm"><i
                    class="fa fa-pencil"></i> @lang('cp.edit')</a>

        <button onclick="return confirm('@lang('cp.confirm_destroy')')" id="destroy-button"
                class="btn btn-default btn-sm">
            <i class="fa fa-trash"></i> @lang('cp.delete')</button>

    </form>

@endif
