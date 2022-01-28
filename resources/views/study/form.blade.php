<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('employeeId') }}
            {{ Form::text('employeeId', $study->employeeId, ['class' => 'form-control' . ($errors->has('employeeId') ? ' is-invalid' : ''), 'placeholder' => 'Employeeid']) }}
            {!! $errors->first('employeeId', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('studiename') }}
            {{ Form::text('studiename', $study->studiename, ['class' => 'form-control' . ($errors->has('studiename') ? ' is-invalid' : ''), 'placeholder' => 'Studiename']) }}
            {!! $errors->first('studiename', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('timestamp') }}
            {{ Form::text('timestamp', $study->timestamp, ['class' => 'form-control' . ($errors->has('timestamp') ? ' is-invalid' : ''), 'placeholder' => 'Timestamp']) }}
            {!! $errors->first('timestamp', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>