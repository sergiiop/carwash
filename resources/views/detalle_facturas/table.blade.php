<div class="table-responsive-sm">
    <table class="table table-striped" id="detalleFacturas-table">
        <thead>
            <tr>
                <th>Factura Id</th>
        <th>Services Id</th>
        <th>Cantidad</th>
        <th>Valor</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalleFacturas as $detalleFactura)
            <tr>
                <td>{{ $detalleFactura->factura_id }}</td>
            <td>{{ $detalleFactura->services_id }}</td>
            <td>{{ $detalleFactura->cantidad }}</td>
            <td>{{ $detalleFactura->valor }}</td>
                <td>
                    {!! Form::open(['route' => ['detalleFacturas.destroy', $detalleFactura->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('detalleFacturas.show', [$detalleFactura->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('detalleFacturas.edit', [$detalleFactura->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>