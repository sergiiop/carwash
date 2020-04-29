<div class="table-responsive-sm">
    <table class="table table-striped" id="facturas-table">
        <thead>
            <tr>
                <th>Person Id</th>
        <th>Car Id</th>
        <th>Status Id</th>
        <th>Observation</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
            <tr>
                <td>{{ $factura->person_id }}</td>
            <td>{{ $factura->car_id }}</td>
            <td>{{ $factura->status_id }}</td>
            <td>{{ $factura->observation }}</td>
                <td>
                    {!! Form::open(['route' => ['facturas.destroy', $factura->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('facturas.show', [$factura->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('facturas.edit', [$factura->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>