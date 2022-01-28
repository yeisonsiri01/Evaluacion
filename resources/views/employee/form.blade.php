<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombres') }}
            {{ Form::text('nombres', $employee->nombres, ['class' => 'form-control' . ($errors->has('nombres') ? ' is-invalid' : ''), 'placeholder' => 'Nombres']) }}
            {!! $errors->first('nombres', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido') }}
            {{ Form::text('apellido', $employee->apellido, ['class' => 'form-control' . ($errors->has('apellido') ? ' is-invalid' : ''), 'placeholder' => 'Apellido']) }}
            {!! $errors->first('apellido', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deptoid') }}
            {{ Form::text('deptoid', $employee->deptoid, ['class' => 'form-control' . ($errors->has('deptoid') ? ' is-invalid' : ''), 'placeholder' => 'Deptoid']) }}
            {!! $errors->first('deptoid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sexo') }}
            {{ Form::text('sexo', $employee->sexo, ['class' => 'form-control' . ($errors->has('sexo') ? ' is-invalid' : ''), 'placeholder' => 'Sexo']) }}
            {!! $errors->first('sexo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cedula') }}
            {{ Form::text('cedula', $employee->cedula, ['class' => 'form-control' . ($errors->has('cedula') ? ' is-invalid' : ''), 'placeholder' => 'Cedula']) }}
            {!! $errors->first('cedula', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('direccion') }}
            {{ Form::text('direccion', $employee->direccion, ['class' => 'form-control' . ($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('direccion', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telcasa') }}
            {{ Form::text('telcasa', $employee->telcasa, ['class' => 'form-control' . ($errors->has('telcasa') ? ' is-invalid' : ''), 'placeholder' => 'Telcasa']) }}
            {!! $errors->first('telcasa', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telmobil') }}
            {{ Form::text('telmobil', $employee->telmobil, ['class' => 'form-control' . ($errors->has('telmobil') ? ' is-invalid' : ''), 'placeholder' => 'Telmobil']) }}
            {!! $errors->first('telmobil', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salariobase') }}
            {{ Form::text('salariobase', $employee->salariobase, ['class' => 'form-control' . ($errors->has('salariobase') ? ' is-invalid' : ''), 'placeholder' => 'Salariobase']) }}
            {!! $errors->first('salariobase', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descuentos') }}
            {{ Form::text('descuentos', $employee->descuentos, ['class' => 'form-control' . ($errors->has('descuentos') ? ' is-invalid' : ''), 'placeholder' => 'Descuentos']) }}
            {!! $errors->first('descuentos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salarioneto') }}
            {{ Form::text('salarioneto', $employee->salarioneto, ['class' => 'form-control' . ($errors->has('salarioneto') ? ' is-invalid' : ''), 'placeholder' => 'Salarioneto']) }}
            {!! $errors->first('salarioneto', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('timestamp') }}
            {{ Form::text('timestamp', $employee->timestamp, ['class' => 'form-control' . ($errors->has('timestamp') ? ' is-invalid' : ''), 'placeholder' => 'Timestamp']) }}
            {!! $errors->first('timestamp', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>