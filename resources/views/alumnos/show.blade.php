@extends('layouts.app')

@section('title', 'Ver Alumno')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-info text-white">
                <h4 class="mb-0">
                    <i class="fas fa-user"></i> Detalles del Alumno
                </h4>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label"><strong>ID:</strong></label>
                    <p class="form-control-plaintext">{{ $alumno->id }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Nombre:</strong></label>
                    <p class="form-control-plaintext">{{ $alumno->nombre }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Apellido:</strong></label>
                    <p class="form-control-plaintext">{{ $alumno->apellido }}</p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Email:</strong></label>
                    <p class="form-control-plaintext">
                        <a href="mailto:{{ $alumno->email }}">{{ $alumno->email }}</a>
                    </p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Curso:</strong></label>
                    <p class="form-control-plaintext">
                        <span class="badge bg-info">{{ $alumno->curso }}</span>
                    </p>
                </div>

                <div class="mb-3">
                    <label class="form-label"><strong>Edad:</strong></label>
                    <p class="form-control-plaintext">{{ $alumno->edad }} años</p>
                </div>

                <div class="d-flex gap-2">
                    <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Editar
                    </a>
                    <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
