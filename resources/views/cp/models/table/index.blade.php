<table class="table table-responsive table-bordered table-striped">
    <thead>
    <tr>

        @foreach($fields as $field)

            <th>@lang('cp.'.$field)</th>

        @endforeach

        <th>@lang('cp.table-actions')</th>

    </tr>
    </thead>
    <tbody>

    @foreach($collection as $item)

        <tr>

            @foreach($fields as $field)

                <td>{{ $item->$field }}</td>

            @endforeach

            @include('cp.models.table.actions', ['item' => $item])

        </tr>

    @endforeach

    </tbody>
</table>