<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $car->id }}</p>
</div>

<!-- Placa Field -->
<div class="form-group">
    {!! Form::label('placa', 'Placa:') !!}
    <p>{{ $car->placa }}</p>
</div>

<!-- Modelo Field -->
<div class="form-group">
    {!! Form::label('modelo', 'Modelo:') !!}
    <p>{{ $car->modelo }}</p>
</div>

<!-- Color Field -->
<div class="form-group">
    {!! Form::label('color', 'Color:') !!}
    <p>{{ $car->color }}</p>
</div>

<!-- Brand Id Field -->
<div class="form-group">
    {!! Form::label('brand_id', 'Marca:') !!}
    <p>{{ $car->marca->descripcion }}</p>
</div>

<!-- Person Id Field -->
<div class="form-group">
    {!! Form::label('person_id', 'Propietario:') !!}
    <p>{{ $car->persona->Identification }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $car->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $car->updated_at }}</p>
</div>

