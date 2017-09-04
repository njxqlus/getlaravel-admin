<table class="table table-responsive table-bordered table-striped">
    <thead>
    <tr>

        @foreach($fields as $field)

            <th>@lang('cp.'.$field)</th>

        @endforeach

        <th>@lang('cp.table_actions')</th>

    </tr>
    </thead>
    <tbody>

    @foreach($collection as $item)

        <tr>

            @foreach($fields as $field)

                <td>{{ $item->$field }}</td>

            @endforeach

            @include('cp.parts.table.actions', ['item' => $item])

        </tr>

    @endforeach

    </tbody>
</table>