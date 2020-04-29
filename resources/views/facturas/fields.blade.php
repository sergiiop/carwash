<!-- Person Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('person_id', 'Person Id:') !!}
    {!! Form::text('person_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Car Id:') !!}
    {!! Form::text('car_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::text('status_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Observation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observation', 'Observation:') !!}
    {!! Form::text('observation', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
