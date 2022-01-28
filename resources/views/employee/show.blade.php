@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? 'Show Employee' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $employee->nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $employee->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Deptoid:</strong>
                            {{ $employee->deptoid }}
                        </div>
                        <div class="form-group">
                            <strong>Sexo:</strong>
                            {{ $employee->sexo }}
                        </div>
                        <div class="form-group">
                            <strong>Cedula:</strong>
                            {{ $employee->cedula }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $employee->direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Telcasa:</strong>
                            {{ $employee->telcasa }}
                        </div>
                        <div class="form-group">
                            <strong>Telmobil:</strong>
                            {{ $employee->telmobil }}
                        </div>
                        <div class="form-group">
                            <strong>Salariobase:</strong>
                            {{ $employee->salariobase }}
                        </div>
                        <div class="form-group">
                            <strong>Descuentos:</strong>
                            {{ $employee->descuentos }}
                        </div>
                        <div class="form-group">
                            <strong>Salarioneto:</strong>
                            {{ $employee->salarioneto }}
                        </div>
                        <div class="form-group">
                            <strong>Timestamp:</strong>
                            {{ $employee->timestamp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
