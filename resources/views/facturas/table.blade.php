<div class="table-responsive-sm">
    <table class="table table-striped" id="facturas-table">
        <thead>
            <tr>
                <th>Identificacion</th>
        <th>Matricula</th>
        <th>Status</th>
        <th>Observation</th>
        <th>Services</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($facturas as $factura)
            <tr>
                <td>{{ $factura->person-> Identification}}</td>
            <td>{{ $factura->car->placa }}</td>
            <td>{{ $factura->status-> Status}}</td>
            <td>{{ $factura->observation }}</td>
            <td>{{ $factura->services-> description}}</td>
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
