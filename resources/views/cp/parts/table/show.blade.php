<table class="table table-responsive table-bordered table-striped">
    <tbody>

    @foreach($fields as $field)

        <tr>
            <td><b>@lang('cp.'.$field)</b></td>
            <td>{{ $item->$field }}</td>
        </tr>

    @endforeach

    </tbody>
</table>