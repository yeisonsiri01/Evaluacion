<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('deptoName') }}
            {{ Form::text('deptoName', $department->deptoName, ['class' => 'form-control' . ($errors->has('deptoName') ? ' is-invalid' : ''), 'placeholder' => 'Deptoname']) }}
            {!! $errors->first('deptoName', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('timestamp') }}
            {{ Form::text('timestamp', $department->timestamp, ['class' => 'form-control' . ($errors->has('timestamp') ? ' is-invalid' : ''), 'placeholder' => 'Timestamp']) }}
            {!! $errors->first('timestamp', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>