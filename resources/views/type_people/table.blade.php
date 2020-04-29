<div class="table-responsive-sm">
    <table class="table table-striped" id="typePeople-table">
        <thead>
            <tr>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typePeople as $typePerson)
            <tr>
                <td>{{ $typePerson->description }}</td>
                <td>
                    {!! Form::open(['route' => ['typePeople.destroy', $typePerson->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typePeople.show', [$typePerson->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('typePeople.edit', [$typePerson->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>