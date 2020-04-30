<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $services->id }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $services->description }}</p>
</div>

<!-- Type Services Id Field -->
<div class="form-group">
    {!! Form::label('type_services_id', 'Type Services Id:') !!}
    <p>{{ $services->tiposervice->description }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status Id:') !!}
    <p>{{ $services->status-> status }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $services->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $services->updated_at }}</p>
</div>

<!-- price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $services->price }}</p>
</div>
