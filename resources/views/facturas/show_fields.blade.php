<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $factura->id }}</p>
</div>

<!-- Person Id Field -->
<div class="form-group">
    {!! Form::label('person_id', 'Person Id:') !!}
    <p>{{ $factura->person_id }}</p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Car Id:') !!}
    <p>{{ $factura->car_id }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status Id:') !!}
    <p>{{ $factura->status_id }}</p>
</div>

<!-- Observation Field -->
<div class="form-group">
    {!! Form::label('observation', 'Observation:') !!}
    <p>{{ $factura->observation }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $factura->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $factura->updated_at }}</p>
</div>

