<!-- Person Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('person_id', 'Identificacion:') !!}
    {!! Form::select('person_id',$datos['persona'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Car Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('car_id', 'Matricula:') !!}
    {!! Form::select('car_id',$datos['car'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Estado:') !!}
    {!! Form::select('status_id',$datos['status'], null, ['class' => 'form-control chosen-select']) !!}
</div>

<!-- Observation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('observation', 'Observacion:') !!}
    {!! Form::text('observation', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('facturas.index') }}" class="btn btn-secondary">Cancel</a>
</div>
