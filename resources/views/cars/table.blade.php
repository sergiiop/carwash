<div class="table-responsive-sm">
    <table class="table table-striped" id="cars-table">
        <thead>
            <tr>
                <th>Placa</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Marca</th>
        <th>Dueño</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cars as $car)
            <tr>
                <td>{{ $car->placa }}</td>
            <td>{{ $car->modelo }}</td>
            <td>{{ $car->color }}</td>
            <td>{{ $car->marca->descripcion }}</td>
            <td>{{ $car->persona->Identification }}</td>
                <td>
                    {!! Form::open(['route' => ['cars.destroy', $car->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cars.show', [$car->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cars.edit', [$car->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
