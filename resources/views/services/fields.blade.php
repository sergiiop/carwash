<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Services Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_services_id', 'Type Services:') !!}
    {!! Form::select('type_services_id',$datos['tipos'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status:') !!}
    {!! Form::select('status_id',$datos['estados'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Precio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('services.index') }}" class="btn btn-secondary">Cancel</a>
</div>
