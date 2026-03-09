@extends('layouts.app')

@section('title', 'Crear Alumno')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">
                    <i class="fas fa-user-plus"></i> Crear Nuevo Alumno
                </h4>
            </div>
            <div class="card-body">
                <form action="{{ route('alumnos.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
                        @error('nombre')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" name="apellido" value="{{ old('apellido') }}" required>
                        @error('apellido')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="curso" class="form-label">Curso:</label>
                        <select class="form-control @error('curso') is-invalid @enderror" id="curso" name="curso" required>
                            <option value="">Selecciona un curso</option>
                            <option value="1ºESO" @selected(old('curso') == '1ºESO')>1ºESO</option>
                            <option value="2ºESO" @selected(old('curso') == '2ºESO')>2ºESO</option>
                            <option value="3ºESO" @selected(old('curso') == '3ºESO')>3ºESO</option>
                            <option value="4ºESO" @selected(old('curso') == '4ºESO')>4ºESO</option>
                        </select>
                        @error('curso')
                            <span class="invalid-feedback d-block">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="edad" class="form-label">Edad:</label>
                        <input type="number" class="form-control @error('edad') is-invalid @enderror" id="edad" name="edad" value="{{ old('edad') }}" required>
                        @error('edad')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Crear Alumno
                        </button>
                        <a href="{{ route('alumnos.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection