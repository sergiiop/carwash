<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $factura->id }}</p>
</div>

<!-- Person Id Field -->
<div class="form-group">
    {!! Form::label('person_id', 'Identificacion:') !!} <p>{{ $factura->person-> Identification }}</p>
</div>

<!-- Car Id Field -->
<div class="form-group">
    {!! Form::label('car_id', 'Placa:') !!} <p>{{ $factura->car->placa }}</p>
</div>

<!-- Status Id Field -->
<div class="form-group">
    {!! Form::label('status_id', 'Status:') !!} <p>{{ $factura->status-> Status }}</p>
</div>

<!-- Observation Field -->
<div class="form-group">
    {!! Form::label('observation', 'Observation:') !!} <p>{{ $factura->observation }}</p>
</div>

<div class="form-group">
    {!! Form::label('services_id', 'Service:') !!} <p>{{ $factura->services->description }}</p>
</div>

<div class="form-group">
    <td>Valor del servicio: <p>{{ $factura->services->price }}</p> </td>
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


