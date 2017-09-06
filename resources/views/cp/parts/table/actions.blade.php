<td>
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
</td>