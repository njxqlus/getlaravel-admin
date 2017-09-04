<td>
    <form action="{{ route('users.destroy', $item) }}" method="POST">

        <input type="hidden" name="_method" value="DELETE">

        {{ csrf_field() }}

        <a href="{{ route('users.show', $item) }}" class="btn btn-info btn-xs">
            <i class="fa fa-eye"></i>
            @lang('cp.show')
        </a>

        <a href="{{ route('users.edit', $item) }}" class="btn btn-primary btn-xs">
            <i class="fa fa-pencil"></i>
            @lang('cp.edit')
        </a>

        <button onclick="return confirm('@lang('cp.confirm_destroy')')" id="destroy-button" class="btn btn-danger btn-xs">
            <i class="fa fa-trash"></i>
            @lang('cp.delete')
        </button>

    </form>
</td>