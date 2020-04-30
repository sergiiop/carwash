<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $people->id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $people->name }}</p>
</div>

<!-- Last Name Field -->
<div class="form-group">
    {!! Form::label('last_name', 'Last Name:') !!}
    <p>{{ $people->last_name }}</p>
</div>

<!-- Identification Field -->
<div class="form-group">
    {!! Form::label('Identification', 'Identification:') !!}
    <p>{{ $people->Identification }}</p>
</div>

<!-- Type Id Field -->
<div class="form-group">
    {!! Form::label('type_id', 'Tipo Identificacion Id:') !!}
    <p>{{ $people->type->description }}</p>
</div>

<!-- Date Birth Field -->
<div class="form-group">
    {!! Form::label('date_birth', 'Date Birth:') !!}
    <p>{{ $people->date_birth }}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{{ $people->phone }}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{{ $people->direccion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $people->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $people->updated_at }}</p>
</div>

