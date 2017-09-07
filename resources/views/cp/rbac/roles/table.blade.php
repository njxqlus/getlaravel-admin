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
    @foreach($roles as $role)
        <tr>
            <td>{{ $role->id }}</td>
            <td>{{ $role->name }}</td>
            <td>{{ $role->display_name }}</td>
            <td>{{ $role->description }}</td>
            <td>@include('cp.parts.actions', ['controller'=>'CP\RBAC\RoleController', 'object'=>$role, 'action'=>'table'])</td>
        </tr>
    @endforeach
    </tbody>
</table>