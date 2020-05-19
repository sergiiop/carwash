<div class="table-responsive-sm">
    <table class="table table-striped" id="servicesStatuses-table">
        <thead>
            <tr>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servicesStatuses as $servicesStatus)
            <tr>
                <td>{{ $servicesStatus->status }}</td>
                <td>
                    {!! Form::open(['route' => ['servicesStatuses.destroy', $servicesStatus->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servicesStatuses.show', [$servicesStatus->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('servicesStatuses.edit', [$servicesStatus->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
