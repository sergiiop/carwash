<div class="table-responsive-sm">
    <table class="table table-striped" id="typeServices-table">
        <thead>
            <tr>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($typeServices as $typeServices)
            <tr>
                <td>{{ $typeServices->description }}</td>
                <td>
                    {!! Form::open(['route' => ['typeServices.destroy', $typeServices->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('typeServices.show', [$typeServices->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('typeServices.edit', [$typeServices->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
