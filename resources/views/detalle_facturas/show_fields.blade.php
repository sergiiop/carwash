<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $detalleFactura->id }}</p>
</div>

<!-- Factura Id Field -->
<div class="form-group">
    {!! Form::label('factura_id', 'Factura Id:') !!}
    <p>{{ $detalleFactura->factura_id }}</p>
</div>

<!-- Services Id Field -->
<div class="form-group">
    {!! Form::label('services_id', 'Services Id:') !!}
    <p>{{ $detalleFactura->services_id }}</p>
</div>

<!-- Cantidad Field -->
<div class="form-group">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    <p>{{ $detalleFactura->cantidad }}</p>
</div>

<!-- Valor Field -->
<div class="form-group">
    {!! Form::label('valor', 'Valor:') !!}
    <p>{{ $detalleFactura->valor }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $detalleFactura->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $detalleFactura->updated_at }}</p>
</div>

