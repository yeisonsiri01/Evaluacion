@extends('layouts.app')

@section('template_title')
    {{ $study->name ?? 'Show Study' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Study</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('studies.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Employeeid:</strong>
                            {{ $study->employeeId }}
                        </div>
                        <div class="form-group">
                            <strong>Studiename:</strong>
                            {{ $study->studiename }}
                        </div>
                        <div class="form-group">
                            <strong>Timestamp:</strong>
                            {{ $study->timestamp }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
