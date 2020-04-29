<!-- Factura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('factura_id', 'Factura Id:') !!}
    {!! Form::text('factura_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Services Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('services_id', 'Services Id:') !!}
    {!! Form::text('services_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::text('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor', 'Valor:') !!}
    {!! Form::text('valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detalleFacturas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
