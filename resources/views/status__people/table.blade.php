<div class="table-responsive-sm">
    <table class="table table-striped" id="statusPeople-table">
        <thead>
            <tr>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($statusPeople as $statusPerson)
            <tr>
                <td>{{ $statusPerson->Status }}</td>
                <td>
                    {!! Form::open(['route' => ['statusPeople.destroy', $statusPerson->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('statusPeople.show', [$statusPerson->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('statusPeople.edit', [$statusPerson->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>