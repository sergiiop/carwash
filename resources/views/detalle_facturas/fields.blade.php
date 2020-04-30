<!-- Factura Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('factura_id', '# Factura:') !!}
    {!! Form::select('factura_id',$datos['factura'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Services Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('services_id', 'Services:') !!}
    {!! Form::select('services_id',$datos['service'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('detalleFacturas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
