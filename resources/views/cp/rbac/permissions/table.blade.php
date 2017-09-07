<table class="table table-responsive table-bordered table-striped">
    <thead>
    <tr>
        <th>@lang('cp.id')</th>
        <th>@lang('cp.name')</th>
        <th>@lang('cp.display_name')</th>
        <th>@lang('cp.description')</th>
        <th>@lang('cp.table_actions')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($permissions as $permission)
        <tr>
            <td>{{ $permission->id }}</td>
            <td>{{ $permission->name }}</td>
            <td>{{ $permission->display_name }}</td>
            <td>{{ $permission->description }}</td>
            <td>@include('cp.parts.actions', ['controller'=>'CP\RBAC\PermissionController', 'object'=>$permission, 'action'=>'table'])</td>
        </tr>
    @endforeach
    </tbody>
</table>