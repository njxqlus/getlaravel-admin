<table class="table table-responsive table-bordered table-striped">
    <thead>
    <tr>
        <th>@lang('cp.id')</th>
        <th>@lang('cp.name')</th>
        <th>@lang('cp.email')</th>
        <th>@lang('cp.created_at')</th>
        <th>@lang('cp.table_actions')</th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->created_at }}</td>

            @include('cp.parts.table.actions', ['controller'=>'CP\UserController', 'object'=>$user])

        </tr>
    @endforeach
    </tbody>
</table>