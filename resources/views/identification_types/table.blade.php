<div class="table-responsive-sm">
    <table class="table table-striped" id="identificationTypes-table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($identificationTypes as $identificationType)
            <tr>
                <td>{{ $identificationType->description }}</td>
                <td>
                    {!! Form::open(['route' => ['identificationTypes.destroy', $identificationType->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('identificationTypes.show', [$identificationType->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('identificationTypes.edit', [$identificationType->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
