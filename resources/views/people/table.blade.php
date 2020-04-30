<div class="table-responsive-sm">
    <table class="table table-striped" id="people-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Last Name</th>
        <th>Identification</th>
        <th>Tipo de Identificacion</th>
        <th>Date Birth</th>
        <th>Phone</th>
        <th>Direccion</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($people as $people)
            <tr>
                <td>{{ $people->name }}</td>
            <td>{{ $people->last_name }}</td>
            <td>{{ $people->Identification }}</td>
            <td>{{ $people->type->description }}</td>
            <td>{{ $people->date_birth }}</td>
            <td>{{ $people->phone }}</td>
            <td>{{ $people->direccion }}</td>
                <td>
                    {!! Form::open(['route' => ['people.destroy', $people->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('people.show', [$people->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('people.edit', [$people->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
